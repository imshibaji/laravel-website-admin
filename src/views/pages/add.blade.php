@extends('admin::layouts.master')

@section('title', 'Shibaji Debnath - Admin & Dashboard')



@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Add Page @endslot
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
                <form action="{{route('admin.page.store')}}" method="POST">
                {{-- <form action="{{url('test')}}" method="POST"> --}}
                    @csrf
                    {{-- @method('PUT') --}}
                    {{-- @method('PATCH') --}}
                    <input type="hidden" name="id" value="">
                    <div class="row">
                        <div class="col-8 py-2">
                            Website URL: {{env('APP_URL')}}/<span id="inline-url" >page-title</span>
                            <input type="hidden" id="slag" name="slag" value="">
                        </div>
                        <div class="col-2 py-2">
                            <select class="form-control" name="status">
                                <option value="draft">Draft</option>
                                <option value="private">Private</option>
                                <option value="public">Public</option>
                            </select>
                        </div>
                        <div class="col-2 text-right py-2">
                            <button type="submit" class="btn btn-secondary btn-block">Save</button>
                        </div>
                    </div>
                    <input type="text" id="title" class="form-control form-control-lg" name="title" placeholder="Page Title">
                    <textarea id="elm1" class="form-control content" name="content"></textarea>
                    <hr>
                    {{--  --}}
                    <div class="card-body">
                        <!-- Nav tabs -->
                        <ul class="nav nav-pills nav-justified" role="tablist">
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link active" data-toggle="tab" href="#home-1" role="tab" aria-selected="true">Common Meta Tags</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#facebook" role="tab" aria-selected="false">Facebook Tags</a>
                            </li>
                            <li class="nav-item waves-effect waves-light">
                                <a class="nav-link" data-toggle="tab" href="#twitter" role="tab" aria-selected="false">Twitter Tags</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane p-3 active" id="home-1" role="tabpanel">
                                <input type="text" id="meta-title" class="form-control form-control-lg" name="meta_title" placeholder="Meta Title">
                                <input type="text" id="meta-keyword" class="form-control form-control-lg" name="meta_keywords" placeholder="Meta Keyword">
                                <textarea id="meta-desc" class="form-control content" name="meta_description" placeholder="Meta Description"></textarea>
                                <select id="meta-robots" class="form-control form-control-lg" name="meta_robots">
                                    <option value="index, follow">Indexed and Follow</option>
                                    <option value="noindex, follow">No Indexed and Follow</option>
                                    <option value="index, nofollow">Indexed But Don't Follow</option>
                                    <option value="noindex, nofollow">No Indexed and No Follow</option>
                                </select>
                                {{-- <input type="text" id="meta-revisited-after" class="form-control form-control-lg" name="meta-revisited-after" placeholder="Revisited After. eg: 10 Days"> --}}
                                <input type="text" id="meta-author" class="form-control form-control-lg" name="meta_author" placeholder="Meta Author" value="{{ Auth::user()->name }}">
                            </div>
                            <div class="tab-pane p-3" id="facebook" role="tabpanel">
                                <p class="text-muted mb-0">
                                    Facebook fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                </p>
                            </div>
                            <div class="tab-pane p-3" id="twitter" role="tabpanel">
                                <p class="text-muted mb-0">
                                    Twitter fund seitan letterpress, keytar raw denim keffiyeh etsy.
                                </p>
                            </div>
                        </div>
                    </div>
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
