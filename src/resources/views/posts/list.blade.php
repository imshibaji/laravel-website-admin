@extends('admin::layouts.master')

@section('title', 'posts List')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Posts @endslot
                @slot('item1') Admin @endslot
                @slot('item1_link') /admin @endslot
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
                            <h4 class="mt-0 header-title">posts List</h4>
                            <p class="text-muted mb-3">DataTables function: <code>$().DataTable();</code>.
                            </p>
                        </div>
                        <div class="col-md-2 text-center text-md-right py-md-3">
                            <a href="{{ route('admin.post.create') }}" class="btn btn-secondary mb-2 mb-lg-0">Add post</a>
                        </div>
                    </div>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->seo->meta_description ?? '' }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->created_at}}</td>
                            <td>{{ $post->updated_at}}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('admin.post.show', [$post])}}" class="text-info footable-edit mr-2">
                                        <i class="fa far fa-eye" aria-hidden="true"></i>
                                        {{-- <i data-feather="eye"></i> --}}
                                    </a>
                                    <a href="{{ route('admin.post.edit', [$post])}}" class="text-info footable-edit mr-2">
                                        <span class="fooicon fooicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{route('admin.post.destroy', [$post])}}"
                                    class="text-danger footable-delete"
                                    onclick="event.preventDefault();
                                    document.getElementById('post-delete').submit();">
                                        <form id="post-delete" action="{{route('admin.post.destroy', [$post])}}" method="POST">
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

@section('headerStyle')
    <!-- DataTables -->
    <link href="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="{{ URL::asset( $assetLink . '/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset( $assetLink . '/plugins/footable/css/footable.bootstrap.css')}}" rel="stylesheet" type="text/css">
@stop

@section('footerScript')
  <!-- Required datatable js -->
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <!-- Buttons examples -->
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.colVis.min.js')}}"></script>
    <!-- Responsive examples -->
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{ URL::asset( $assetLink . '/posts/jquery.datatable.init.js')}}"></script>
@stop
