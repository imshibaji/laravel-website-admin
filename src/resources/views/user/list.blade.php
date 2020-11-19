@extends('admin::layouts.master')

@section('title', 'Users List')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Users List @endslot
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
                            <h4 class="mt-0 header-title">Users List</h4>
                            <p class="text-muted mb-3">This is importent for site page optimizations.</p>
                        </div>
                        <div class="col-md-2 text-center text-md-right py-md-3">
                            <a href="{{ route('admin.user.create') }}" class="btn btn-secondary mb-2 mb-lg-0">Add User</a>
                        </div>
                    </div>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name ?? '' }}</td>
                            <td>{{ $user->email ?? '' }}</td>
                            <td>{{ $user->created_at}}</td>
                            <td>{{ $user->updated_at}}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('admin.user.show', [$user])}}" class="text-info footable-edit mr-2">
                                        <i class="fa far fa-eye" aria-hidden="true"></i>
                                        {{-- <i data-feather="eye"></i> --}}
                                    </a>
                                    <a href="{{ route('admin.user.edit', [$user])}}" class="text-info footable-edit mr-2">
                                        <span class="fooicon fooicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{route('admin.user.destroy', [$user])}}"
                                    class="text-danger footable-delete"
                                    onclick="event.preventDefault();
                                    document.querySelector('.seo-delete').submit();">
                                        <form class="seo-delete" action="{{route('admin.user.destroy', [$user])}}" method="POST">
                                            @csrf
                                            @method('delete')
                                        <span class="fooicon fooicon-trash" aria-hidden="true"></span>
                                        </form>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        {{-- <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>2011/07/25</td>
                            <td>2011/04/25</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="" class="text-info footable-edit mr-2">
                                        <span class="fooicon fooicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="" class="text-danger footable-delete">
                                        <span class="fooicon fooicon-trash" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ashton Cox</td>
                            <td>Junior Technical Author</td>
                            <td>San Francisco</td>
                            <td>2009/01/12</td>
                            <td>2011/04/25</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="" class="text-info footable-edit mr-2">
                                        <span class="fooicon fooicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="" class="text-danger footable-delete">
                                        <span class="fooicon fooicon-trash" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </td>
                        </tr> --}}
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>


</div><!-- container -->
@stop

@include('admin::layouts.partials.extra-list')
