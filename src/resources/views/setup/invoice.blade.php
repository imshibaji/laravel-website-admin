@extends('admin::layouts.master')

@section('title', 'Invoice Settings')

@section('content')
  <div class="container-fluid">
    <!-- post-Title -->
    <div class="row">
        <div class="col-sm-12">
            <x-admin-breadcrumb
            title="Invoice Settings"
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
                    <h5>Invoice</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <x-admin-input name="Number Prefix" col="6" fname="number_prefix" placeholder="Invoice Number" />
                        <x-admin-input name="Number Digit" col="6" fname="number_digit" placeholder="Number of Digits" />
                        <x-admin-input name="Next Number" col="6" fname="next_number" placeholder="Number of Digits" />
                        <x-admin-select col="6" name="Payment Terms" fname="payment_terms">
                            @slot('option')
                                <option value="0">Due upon receipt</option>
                                <option value="15">Due within 15 days</option>
                                <option value="30">Due within 30 days</option>
                                <option value="45">Due within 45 days</option>
                                <option value="60">Due within 60 days</option>
                                <option value="90">Due within 90 days</option>
                            @endslot
                        </x-admin-select>
                        <x-admin-input name="Title" col="6" fname="title" placeholder="Invoice Title" />
                        <x-admin-input name="Subheading" col="6" fname="subheading" placeholder="Invoice Subheading" />
                        <x-admin-textarea name="Notes" fname="notes" placeholder="Enter Notes" />
                        <x-admin-textarea name="Footer" fname="footer" placeholder="Enter Footer" />

                        <x-admin-select2 name="Item Name" col="6" fname="item_name">
                            @slot('option')
                                <option value="items">Items</option>
                                <option value="products">Products</option>
                                <option value="services">Services</option>
                                <option value="custom">Custom</option>
                            @endslot
                        </x-admin-select2>

                        <x-admin-select2 name="Price Name" col="6" fname="price_name">
                            @slot('option')
                                <option value="price">Price</option>
                                <option value="rate">Rate</option>
                                <option value="custom">Custom</option>
                            @endslot
                        </x-admin-select2>

                        <x-admin-select2 name="Quantity Name" col="6" fname="quantity_name">
                            @slot('option')
                                <option value="quantity">Quantity</option>
                                <option value="custom">Custom</option>
                            @endslot
                        </x-admin-select2>

                        <x-admin-select2 name="Template" col="6" fname="template">
                            @slot('option')
                                <option value="basic">Basic</option>
                                <option value="modern">Modern</option>
                            @endslot
                        </x-admin-select2>
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
