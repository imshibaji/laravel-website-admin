@extends('admin::layouts.master')

@section('title', 'Users List')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Users"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />
        </div><!--end col-->
    </div>
    <!-- end post title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" :message="session('status')"></x-admin-alert>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="mt-0 header-title">Users List</h4>
                            <p class="text-muted mb-3">This is importent for site page optimizations.</p>
                        </div>
                        <div class="col-md-2 text-center text-md-right py-md-3">
                            @can('add user', Model::class)
                                @include('admin::users.user.modals.add')
                                {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-secondary mb-2 mb-lg-0">Add User</a> --}}
                            @endcan
                        </div>
                    </div>

                    <x-admin-datatable>
                        <x-slot name="thead">
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Roles</th>
                                <th>Permissions</th>
                                <th>Actions</th>
                            </tr>
                        </x-slot>
                        <x-slot name="tbody">
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name ?? '' }}</td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>
                                @foreach ($user->getRoleNames() as $role)
                                    <div class="badge badge-secondary">{{$role}}</div>
                                @endforeach
                            </td>
                            <td>
                                @foreach ($user->getAllPermissions() as $permission)
                                    <div class="badge badge-primary">{{$permission->name}}</div>
                                @endforeach
                            </td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    @include('admin::users.user.modals.view')
                                    @if($user->can('edit user') || auth()->user()->id == 1)
                                        @include('admin::users.user.modals.edit')
                                    @endif
                                    @if($user->can('delete user') || auth()->user()->id == 1)
                                        @include('admin::users.user.modals.delete')
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </x-slot>
                    </x-admin-datatable>

                </div>
            </div>
        </div>
    </div>


</div><!-- container -->
@stop

@section('headers')
@parent
<link href="{{ URL::asset($assetLink .'/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('js_plugins')
@parent
<script src="{{ URL::asset($assetLink .'/plugins/select2/select2.min.js')}}"></script>
<script>
$(function(){
    $(".select2").select2({
        width: '100%',
    });
});
</script>
@endsection
