
@extends('admin::layouts.master')

@section('title', 'Documentantation')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Developer's Documentation</h3>
        </div>
        <div class="card-body">
            @meta
            @include('admin::docs.index')
        </div>
    </div>
</div>
@endsection

@section('css_plugins')
<!-- Help Plugins -->
<link href="{{ URL::asset( $assetLink .'/plugins/prism/prism.css') }}" rel="stylesheet" />
@endsection
@section('js_plugins')
<!-- Help Plugins -->
<script src="{{ URL::asset( $assetLink . '/plugins/prism/prism.js') }}"></script>
@endsection

@section('styles')
<style>
em img{
    width: 100%;
}
</style>
@endsection

@section('scripts')
@parent
<script>
$(function(){$('body').addClass('enlarge-menu');});
</script>
@endsection
