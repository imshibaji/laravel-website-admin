<x-admin-base title="Business Register" item2="All Setup" link2="{{route('admin.business')}}">
    <div class="row">
        <div class="col-12">
            <form action="{{ config('admin.prefix', 'admin') }}/setup/business" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{$business->id}}">
            <div class="card">
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-8">
                        <x-admin-input name="Business name" required fname="name" placeholder="Input Business name" value="{{$business->name ?? ''}}" />
                        <x-admin-select2 name="Select Business" required fname="type" placeholder="Select Business Type">
                            @slot('option')
                                <option @if($business->type == 'Ownership') selected @endif value="Ownership">Ownership</option>
                                <option @if($business->type == 'Partnership') selected @endif value="Partnership">Partnership</option>
                                <option @if($business->type == 'OPC Pvt. Ltd.') selected @endif value="OPC Pvt. Ltd.">One Person Company(OPC Pvt. Ltd.)</option>
                                <option @if($business->type == 'Pvt. Ltd.') selected @endif value="Pvt. Ltd.">Private Limited (Pvt. Ltd.)</option>
                                <option @if($business->type == 'Ltd.') selected @endif value="Ltd.">Limited (Ltd.)</option>
                            @endslot
                        </x-admin-select2>
                        </div>
                        <div class="col-md-4">
                            <x-admin-file-uploader name="Business Logo" fname="logo" img="{{ ($business->imgUrl()) ? $business->imgUrl() : '' }}" />
                        </div>

                        <x-admin-devider></x-admin-devider>

                        <x-admin-input name="Trading Name" fname="trading_name" placeholder="Input Trading Name" value="{{$business->trading_name}}" />
                        <x-admin-input name="Registration No" col="6" fname="registration_no" placeholder="Input Registration No" value="{{$business->registration_no}}" />
                        <x-admin-input name="Tax Register No" col="6" fname="tax_registration_no" placeholder="Input Tax Register No" value="{{$business->tax_registration_no}}" />
                        <x-admin-input name="Contact No" col="6" fname="contact_no" placeholder="Input Contact No" value="{{$business->contact_no}}" />
                        <x-admin-input name="Email" col="6" placeholder="Input Email" value="{{$business->email}}" />
                        <x-admin-input name="Address" placeholder="Input your address" value="{{$business->address}}" />
                        <x-admin-input name="City" required col="4" placeholder="Input your City name" value="{{$business->city}}" />
                        <x-admin-input name="State" required col="4" placeholder="Input your State name" value="{{$business->state}}" />
                        <x-admin-select name="Country" required col="4" placeholder="Input your Country name">
                            @slot('option')
                               <option @if($business->country == 'in') selected @endif value="in">India</option>
                               <option @if($business->country == 'uk') selected @endif value="uk">United Kingdom</option>
                            @endslot
                        </x-admin-select>
                        <x-admin-switch-btn name="Active" col="6" fname="is_active" :checked="$business->is_active"></x-admin-switch-btn>
                        <x-admin-switch-btn name="Default" col=6 fname="default" :checked="$business->default"></x-admin-switch-btn>
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
