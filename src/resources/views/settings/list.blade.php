@extends('admin::layouts.master')

@section('title', 'Roles List')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Settings List @endslot
                @slot('item1') Admin @endslot
                {{-- @slot('item1_link') /admin @endslot --}}
                {{-- @slot('item2') posts @endslot
                @slot('item2_link') /admin/post @endslot --}}
            @endcomponent

        </div><!--end col-->
    </div>
    <!-- end post title end breadcrumb -->

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
            </button>
            {{ session('status') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <h4 class="mt-0 header-title">Settings List</h4>
                            <p class="text-muted mb-3">This is importent for site page optimizations.</p>
                        </div>
                        <div class="col-md-2 text-center text-md-right py-md-3">
                            @include('admin::settings.modals.add')
                            {{-- <a href="{{ route('admin.user.create') }}" class="btn btn-secondary mb-2 mb-lg-0">Add User</a> --}}
                        </div>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Settings Details</th>
                            {{-- <th>Created At</th> --}}
                            {{-- <th>Updated At</th> --}}
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($settings as $setting)
                        <tr>
                            <td>{{ $setting->name ?? '' }}</td>
                            <td>{{ $setting->type ?? '' }}</td>
                            <td>
                                <code>{{ $setting->value }}</code>
                            </td>
                            {{-- <td>{{ $role->created_at}}</td> --}}
                            {{-- <td>{{ $role->updated_at}}</td> --}}
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    @include('admin::settings.modals.view')
                                    @include('admin::settings.modals.edit')
                                    @include('admin::settings.modals.delete')
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
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
        // theme: "classic"
    });
});
</script>
@endsection
