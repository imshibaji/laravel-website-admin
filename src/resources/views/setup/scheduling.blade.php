@extends('admin::layouts.master')

@section('title', 'Scheduling')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Scheduling"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />
        </div><!--end col-->
    </div>
    <!-- end post title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" :message="session('status')"></x-admin-alert>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row">
                Scheduling
            </div>
        </div>
    </div>
</div>
@stop
