@extends('admin::layouts.master')

@section('title', 'Post Add')



@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Add User @endslot
                @slot('item1') Admin @endslot
                @slot('item1_link') /admin @endslot
                @slot('item2') Users List @endslot
                @slot('item2_link') /admin/user @endslot
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
    <div class="col-md-12">
        <h4 class="mt-0 header-title">User Add</h4>
        <p class="text-muted mb-3">Use url link for which site page connect with seo</p>
    </div>

    <form action="{{route('admin.user.store')}}" method="post">
        @csrf
        <label for="name">Full Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Input user name" />
        <input type="text" class="form-control" name="email" placeholder="Input user email" />
        <input type="text" class="form-control" name="password" placeholder="Input user Password" />
        <div class="col-12 text-right py-2">
            <button type="submit" class="btn btn-secondary btn-block">Save</button>
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
@parent
<script src="{{ URL::asset( $assetLink . '/plugins/tinymce/tinymce.min.js')}}"></script>
<script src="{{ URL::asset( $assetLink . '/pages/jquery.form-editor.init.js')}}"></script>
<script>
    window.addEventListener('DOMContentLoaded', () => {
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
