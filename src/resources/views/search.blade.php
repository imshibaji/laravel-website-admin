@extends('admin::layouts.master')

@section('title', 'Shibaji Debnath - Admin & Dashboard')

@section('content')
  <div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Searches Area"
            item1="Admin"
            :link1="config('admin.prefix', 'admin')"
            />

        </div><!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    @if (session('status'))
        <x-admin-alert type="success" message="{{ session('status') }}" />
    @endif

<div class="container">
    <div class="card card-body">
        <h1>Search</h1>

        There are {{ $searchResults->count() }} results.

        @foreach($searchResults->groupByType() as $type => $modelSearchResults)
        <h2>{{ $type }}</h2>

        @foreach($modelSearchResults as $searchResult)
            <ul>
                    <li><a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a></li>
            </ul>
        @endforeach
        @endforeach
    </div>
</div>
@stop
