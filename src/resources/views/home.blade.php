@extends('admin::layouts.master')

@section('title', 'Shibaji Debnath - Admin & Dashboard')

@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Dashboard"
            {{-- item1="Admin" --}}
            {{-- :link1="config('admin.prefix', 'admin')" --}}
            />

        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" message="{{ session('status') }}" />
    @endif

    {{ __('You are logged in!') }}

    {{-- <x-admin-modal></x-admin-modal> --}}

    {{-- {!! $form->render() !!} --}}

    @include('admin::dashboards.main')

<!-- container -->
@stop

@php
    $color_scheme = isset($_COOKIE["color_scheme"]) ? $_COOKIE["color_scheme"] : false;
    // if ($color_scheme === false) $color_scheme = 'light';
@endphp

