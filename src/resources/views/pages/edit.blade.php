@extends('admin::layouts.master')

@section('title', 'Page Edit')

@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Edit Page @endslot
                @slot('item1') Admin @endslot
                @slot('item1_link') /admin @endslot
                @slot('item2') Pages @endslot
                @slot('item2_link') /admin/page @endslot
            @endcomponent

        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

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
                <form action="{{route('admin.page.update', [$page])}}" method="POST">
                {{-- <form action="{{url('test')}}" method="POST"> --}}
                    @csrf
                    @method('PUT')
                    {{-- @method('PATCH') --}}
                    {{-- <input type="hidden" name="id" value="{{ $page->id }}"> --}}
                    <div class="row">
                        <div class="col-8 py-2">
                            Website URL: {{env('APP_URL')}}/<span id="inline-url" >{{$page->slag ?? 'page-title'}} </span>
                            <input type="hidden" id="slag" name="slag" value="{{$page->slag}}">
                        </div>
                        <div class="col-2 py-2">
                            <select class="form-control" name="status">
                                <option value="public" @if($page->status == 'public') selected @endIf>Public</option>
                                <option value="draft" @if($page->status == 'draft') selected @endIf>Draft</option>
                                <option value="private" @if($page->status == 'private') selected @endIf>Private</option>
                            </select>
                        </div>
                        <div class="col-2 text-right py-2">
                            <button type="submit" class="btn btn-secondary btn-block">Save</button>
                        </div>
                    </div>
                    <input type="text" id="title" class="form-control form-control-lg" name="title" placeholder="Page Title" value="{{ $page->title }}">
                    <textarea id="elm1" class="form-control content" name="content">{{ $page->content }}</textarea>
                    <hr>
                    {{-- seo  --}}
                    @include('admin::seo.edit')

                    <div class="row">
                        <div class="col-12 text-right py-2">
                            <button type="submit" class="btn btn-secondary btn-block">Save</button>
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- container -->
@stop


@section('headerStyle')
@endsection

@section('footerScript')
<script src="{{ URL::asset( $assetLink . '/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/pages/jquery.form-editor.init.js')}}"></script>

<script>
    window.addEventListener('DOMContentLoaded', () => {
        $('#title').on('keyup', function(){
            var slag = this.value.replace(/ /g, "-").toLocaleLowerCase();
            $('#slag').val(slag);
            $('#inline-url').html(slag);
            $('#meta-title').val(this.value);
        });
    });
</script>
@stop
