<x-admin-base title="Bill Setup" item2="All Setup" link2="{{route('admin.business')}}">
    <div class="row">
        <div class="col-12">
            <form action="{{ config('admin.prefix', 'admin') }}/setup/bill" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$business->id}}">
            <div class="card">
                <div class="card-header">
                    <h5>Bill Setup</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <x-admin-input name="Number Prefix" col="6" fname="number_prefix" value="{{$business->bill_number_prefix}}" />
                        <x-admin-input name="Number Digit" col="6" fname="number_digit" value="{{$business->bill_number_digit}}" />
                        <x-admin-input name="Next Number" col="6" fname="next_number" value="{{$business->bill_next_number}}" />
                        <x-admin-input name="Title" col="6" fname="title" value="{{$business->bill_title}}" />
                        <x-admin-input name="Subheading" col="12" fname="subheading" value="{{$business->bill_subheading}}" />
                        <x-admin-textarea name="Notes" fname="notes" value="{{$business->bill_notes}}" />

                        <x-admin-select2 name="Item Name" col="6" fname="item_name">
                            @slot('option')
                                <option value="{{$business->bill_item_name}}">{{ Str::ucfirst($business->bill_item_name) }}</option>
                                <option value="items">Items</option>
                                <option value="products">Products</option>
                                <option value="services">Services</option>
                                <option value="custom">Custom</option>
                            @endslot
                        </x-admin-select2>

                        <x-admin-select2 name="Price Name" col="6" fname="price_name">
                            @slot('option')
                                <option value="{{$business->bill_price_name}}">{{ Str::ucfirst($business->bill_price_name) }}</option>
                                <option value="price">Price</option>
                                <option value="rate">Rate</option>
                                <option value="custom">Custom</option>
                            @endslot
                        </x-admin-select2>

                        <x-admin-select2 name="Quantity Name" col="6" fname="quantity_name">
                            @slot('option')
                                <option value="{{$business->bill_quantity_name}}">{{ Str::ucfirst($business->bill_quantity_name) }}</option>
                                <option value="quantity">Quantity</option>
                                <option value="custom">Custom</option>
                            @endslot
                        </x-admin-select2>

                        <x-admin-select2 name="Template" col="6" fname="template">
                            @slot('option')
                                <option value="{{$business->bill_template}}">{{ Str::ucfirst($business->bill_template) }}</option>
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
</x-admin-base>
