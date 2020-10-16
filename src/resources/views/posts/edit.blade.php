@extends('admin::layouts.master')

@section('title', 'Post Edit')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Edit Post @endslot
                @slot('item1') Admin @endslot
                @slot('item1_link') /admin @endslot
                @slot('item2') Posts @endslot
                @slot('item2_link') /admin/post @endslot
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
                <form action="{{route('admin.post.update', [$post])}}" method="POST">
                {{-- <form action="{{url('test')}}" method="POST"> --}}
                    @csrf
                    @method('PUT')
                    {{-- @method('PATCH') --}}
                    {{-- <input type="hidden" name="id" value="{{ $post->id }}"> --}}
                    <div class="row">
                        <div class="col-8 py-2">
                            Website URL: {{env('APP_URL')}}/<span id="inline-url" >{{$post->slag ?? 'post-title'}} </span>
                            <input type="hidden" id="slag" name="slag" value="{{$post->slag}}">
                        </div>
                        <div class="col-2 py-2">
                            <select class="form-control" name="status">
                                <option value="public" @if($post->status == 'public') selected @endIf>Public</option>
                                <option value="draft" @if($post->status == 'draft') selected @endIf>Draft</option>
                                <option value="private" @if($post->status == 'private') selected @endIf>Private</option>
                            </select>
                        </div>
                        <div class="col-2 text-right py-2">
                            <button type="submit" class="btn btn-secondary btn-block">Save</button>
                        </div>
                    </div>
                    <input type="text" id="title" class="form-control form-control-lg" name="title" placeholder="Post Title" value="{{ $post->title }}">
                    <textarea id="elm1" class="form-control content" name="content">{{ $post->content }}</textarea>
                    <hr>
                    {{-- seo  --}}
                    {{-- @include('admin::seo.edit') --}}
                    <x-admin-seo :id="$post->seo_optimization_id" />

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
