@extends('admin::layouts.master')

@section('title', 'Seo List')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Seo List @endslot
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
                            <h4 class="mt-0 header-title">Seo List</h4>
                            <p class="text-muted mb-3">This is importent for site page optimizations.</p>
                        </div>
                        <div class="col-md-2 text-center text-md-right py-md-3">
                            @include('admin::seo.add')
                            {{-- <a href="{{ route('admin.seo.create') }}" class="btn btn-secondary mb-2 mb-lg-0">Add SEO</a> --}}
                        </div>
                    </div>
                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Site URL</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                            <th>Actions</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($seos as $seo)
                        <tr>
                            <td>{{ $seo->meta_title ?? '' }}</td>
                            <td>{{ $seo->meta_keywords ?? '' }}</td>
                            <td>{{ $seo->url }}</td>
                            <td>{{ $seo->created_at}}</td>
                            <td>{{ $seo->updated_at}}</td>
                            <td class="text-center">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a href="{{ route('admin.seo.show', [$seo])}}" class="text-info footable-edit mr-2">
                                        <i class="fa far fa-eye" aria-hidden="true"></i>
                                        {{-- <i data-feather="eye"></i> --}}
                                    </a>
                                    <a href="{{ route('admin.seo.edit', [$seo])}}" class="text-info footable-edit mr-2">
                                        <span class="fooicon fooicon-pencil" aria-hidden="true"></span>
                                    </a>
                                    <a href="{{route('admin.seo.destroy', [$seo])}}"
                                    class="text-danger footable-delete"
                                    onclick="event.preventDefault();
                                    document.querySelector('.seo-delete').submit();">
                                        <form class="seo-delete" action="{{route('admin.seo.destroy', [$seo])}}" method="POST">
                                            @csrf
                                            @method('delete')
                                        <span class="fooicon fooicon-trash" aria-hidden="true"></span>
                                        </form>
                                    </a>
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


@section('footerScript')
@parent
<script>
$(function(){
    $('#title').on('keyup', function(){
        var slag = this.value.replace(/ /g, "-").toLocaleLowerCase();
        $('#slag').val(slag);
        $('#inline-url').html(slag);
        $('#meta-title').val(this.value);
        $('#meta-og-title').val(this.value);
        $('#meta-twitter-title').val(this.value);
    });
    $('#meta-title').on('keyup', function(){
        $('#meta-og-title').val(this.value);
        $('#meta-twitter-title').val(this.value);
    });
    $('#meta-keyword').on('keyup', function(){
        $('#meta-og-keyword').val(this.value);
        $('#meta-twitter-keyword').val(this.value);
    });
    $('#meta-description').on('keyup', function(){
        $('#meta-og-description').val(this.value);
        $('#meta-twitter-description').val(this.value);
    });
});
</script>
@endsection
