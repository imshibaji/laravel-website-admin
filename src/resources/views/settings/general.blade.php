@extends('admin::layouts.master')

@section('title', 'General Settings')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="General Settings"
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
        <div class="col-12">
            <form action="{{ config('admin.prefix', 'admin') }}/settings" method="POST">
                @csrf
            <div class="card">
                <div class="card-header">
                    <h5>General Setting</h5>
                </div>
                <div class="card-body">
                        <div class="form-row">
                            <x-admin-input name="Website Link" col="6" fname="website" placeholder="Input Main Website URL" />
                            <x-admin-input name="Analytics ID" col="6" fname="analytics_id" placeholder="Google Analytics ID for Tracking your website." />
                            <x-admin-select2 name="Select Business" fname="business_id" placeholder="Select A Business">
                                @slot('option')
                                    <option value="1">Medust Technology</option>
                                    <option value="2">LARNR Education</option>
                                @endslot
                            </x-admin-select2>

                            <x-admin-devider></x-admin-devider>

                            <x-admin-input name="Website Title" fname="site_title" placeholder="Input A Website Name" />
                            <x-admin-input name="Meta Keywords" fname="site_meta_keywords" placeholder="Input A Meta Keywords" />
                            <x-admin-input name="Meta Description" fname="site_meta_description" placeholder="Input Short Description" />
                            <x-admin-input name="Website Logo" type="file" fname="site_logo" placeholder="Input A Webapp Logo" />
                        </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@stop
