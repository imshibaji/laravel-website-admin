<x-admin-base title="Default Settings" item2="All Setup" link2="{{route('admin.business')}}">
    <div class="row">
        <div class="col-12">
            <form action="{{ config('admin.prefix', 'admin') }}/setup/default" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$business->id}}">
            <div class="card">
                <div class="card-header">
                    <h5>Default Setting</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <x-admin-input name="Branch / Location" col="6" fname="default_location_id" placeholder="eg. Kolkata, WB, India" />
                        <x-admin-input name="Account" col="6" fname="default_account_id" placeholder="eg: Cash or Bank" />
                        <x-admin-select name="Currency" col="6" fname="default_currency_id">
                            <x-slot name="option">
                                    <option value="">Choose Currency</option>
                                @foreach ($business->currencies as $cur)
                                    <option @if($cur->id == $business->default_currency_id) selected @endif value="{{$cur->id}}">{{ $cur->name }}</option>
                                @endforeach
                            </x-slot>
                        </x-admin-select>
                        <x-admin-select name="Tax" col="6" fname="default_tax_id">
                            <x-slot name="option">
                                    <option value="">Choose Tax</option>
                                @foreach ($business->taxes as $tax)
                                    <option @if($tax->id == $business->default_tax_id) selected @endif value="{{$tax->id}}">{{ $tax->name }} - {{ $tax->rate }}%</option>
                                @endforeach
                            </x-slot>
                        </x-admin-select>

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
</x-admin-base>
