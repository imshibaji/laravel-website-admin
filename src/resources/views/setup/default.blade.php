@extends('admin::layouts.master')

@section('title', 'Default Settings')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Default Settings"
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
                    <h5>Default Setting</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <x-admin-input name="Location" col="6" fname="default_location_id" placeholder="eg. Kolkata" />
                        <x-admin-input name="Account" col="6" fname="default_account_id" placeholder="eg: Cash or Bank" />

                        <x-admin-input name="Currency" col="6" fname="default_currency_id" placeholder="Input A Date Format" />
                        <x-admin-input name="Tax" col="6" fname="default_tax_id" placeholder="Input A Date Separator" />

                        <x-admin-input name="Payment Mode" col="6" fname="default_payment_mode_id" placeholder="eg. Online or Offline" />
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
