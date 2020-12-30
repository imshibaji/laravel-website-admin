@extends('admin::layouts.master')

@section('title', 'All Settings')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="All Settings"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />
        </div><!--end col-->
    </div>
    <!-- end post title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" :message="session('status')"></x-admin-alert>
    @endif

    <div class="row">
        @php
            $setting = config('admin.left_side_menu.settings');
            $settings = $setting[1]['child'];
            // dd($setting[0]['child']);
        @endphp
        @for ($i = 0; $i < count($settings); $i++)
            <x-admin-setting-button link="{{config('admin.prefix') . $settings[$i]['link']}}" title="{{$settings[$i]['label']}}" icon="{{$settings[$i]['icon']}}" :desc="$settings[$i]['desc']" />
        @endfor
    </div>
</div>
@stop

