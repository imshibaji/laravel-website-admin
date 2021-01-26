@extends('admin::layouts.master')

@section('title', 'Permission List')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Permissions"
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
                            <h4 class="mt-0 header-title">Permission List</h4>
                            <p class="text-muted mb-3">This is importent for site page optimizations.</p>
                        </div>
                        <div class="col-md-2 text-center text-md-right py-md-3">
                            @can('add permission')
                                @include('admin::users.permission.modals.add')
                                {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-secondary mb-2 mb-lg-0">Add User</a> --}}
                            @endcan
                        </div>
                    </div>

                    <x-admin-datatable>
                        <x-slot name="thead">
                        <tr>
                            <th>Name</th>
                            <th>Guard Name</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </x-slot>

                        <x-slot name="tbody">
                        @foreach ($permissions as $permission)
                        <tr>
                            <td>{{ $permission->name ?? '' }}</td>
                            <td>{{ $permission->guard_name ?? '' }}</td>
                            <td>{{ $permission->created_at}}</td>
                            <td>{{ $permission->updated_at}}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    @include('admin::users.permission.modals.view')
                                    @can('edit permission')
                                        @include('admin::users.permission.modals.edit')
                                    @endcan
                                    @can('delete permission')
                                        @include('admin::users.permission.modals.delete')
                                    @endcan
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
