@extends('admin::layouts.master')

@section('title', 'Shibaji Debnath - Admin & Dashboard')

@section('js_plugins')
<!-- Plugins Test -->
<script src="{{ URL::asset( $assetLink . '/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endsection

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
        <x-admin-alert type="success" message="{{ session('status') }}" />
    @endif

    {{ __('You are logged in!') }}

    {{-- {!! $form->render() !!} --}}

    @include('admin::dashboards.ecommerce')

<!-- container -->
@stop

