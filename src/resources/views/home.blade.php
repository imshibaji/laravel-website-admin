@extends('admin::layouts.master')

@section('title', 'Shibaji Debnath - Admin & Dashboard')

@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">

            @component('admin::common-components.breadcrumb')
                @slot('title') Dashboard @endslot
                {{-- @slot('item1') Metrica @endslot
                @slot('item1_link') #Metrica @endslot
                @slot('item2') Pages @endslot
                @slot('item2_link') #Pages @endslot --}}
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

    {{ __('You are logged in!') }}

    {{-- {!! $form->render() !!} --}}

    @include('admin::dashboard.home')

<!-- container -->
@stop

@php
    $color_scheme = isset($_COOKIE["color_scheme"]) ? $_COOKIE["color_scheme"] : false;
    // if ($color_scheme === false) $color_scheme = 'light';
@endphp

