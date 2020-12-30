@extends('admin::layouts.master')

@section('title', 'Business Dashboard')

@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Business Dashboard"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />
        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" message="{{ session('status') }}" />
    @endif

    <div class="row">
        <x-admin-crm icon="activity" title="Incomes" progressCost="80" isActive></x-admin-crm>
        <x-admin-crm icon="coffee" title="Expanses" progressCost="30" cost="$12k"></x-admin-crm>
        <x-admin-crm icon="filter" title="Profits" progressCost="50" cost="$8k"></x-admin-crm>
        <x-admin-crm cost="2345566"></x-admin-crm>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if($options)
            <x-admin-apex-chart title="Business Performance Data" :options="$options"></x-admin-apex-chart>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <x-admin-datatable></x-admin-datatable>
                </div>
            </div>
        </div>
    </div>

<!-- container -->
@stop
