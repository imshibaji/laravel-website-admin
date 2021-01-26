@extends('admin::layouts.master')

@section('title', $title)

@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            :title="$title"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            :item2="$item2"
            :link2="$link2"
            />
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->
    @if (session('status'))
        <x-admin-alert type="success" message="{{ session('status') }}" />
    @endif
    <div class="container-fluid">
        {{$slot}}
    </div>
@stop

@section('headers')
@parent
{{$headers}}
@endsection
@section('css_plugins')
@parent
{{$css_plugins}}
@endsection
@section('headerStyle')
@parent
{{$headerStyle}}
@endsection
@section('styles')
@parent
{{$styles}}
@endsection
@section('js_plugins')
@parent
{{$js_plugins}}
@endsection
@section('footerScript')
@parent
{{$footerScript}}
@endsection
@section('scripts')
@parent
@if($nosidebar)
<script>
$(function(){$('body').addClass('enlarge-menu');});
</script>
@endif
{{$scripts}}
@endsection

