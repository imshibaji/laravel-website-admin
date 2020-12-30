@extends('admin::layouts.master')

@section('title', 'Localisation Settings')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Localisation Settings"
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
            <form action="{{ config('admin.prefix', 'admin') }}/setup/company" method="POST">
                @csrf
            <div class="card">
                <div class="card-header">
                    <h5>Localisation</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <x-admin-input type="date" name="Financial Year Start" col="6" fname="year_starting_date" />
                        <x-admin-input name="Time Zone" col="6" fname="time_zone" placeholder="eg: Asia/Kolkata" />

                        <x-admin-input name="Date Format" col="6" fname="date_format" placeholder="Input A Date Format" />
                        <x-admin-input name="Date Separator" col="6" fname="date_separator" placeholder="Input A Date Separator" />

                        <x-admin-input name="Percent (%) Position" col="6" fname="percent_position" placeholder="Input After Position" />
                        <x-admin-input name="Discount Location" col="6" fname="discount_location" placeholder="At total" />
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
