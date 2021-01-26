<x-admin-base nosidebar title="New Account" item2="All Accounts" link2="{{ route('admin.accounts.index') }}">
<form action="{{ route('admin.accounts.store') }}" method="post">
    @csrf
    <input type="hidden" name="business_id" value="{{ business()->id }}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <x-admin-input col="md-6" name="name" required />
                <x-admin-select col="md-6" name="Currency" required fname="currency_code">
                    <x-slot name="option">
                        <option value="">Select Currency</option>
                        @foreach ($currencies ?? '' as $currency)
                            <option value="{{$currency->code}}">{{$currency->name}}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-input col="md-6" name="Opening balance" required type="number" />
                <x-admin-input col="md-6" name="Bank name" fname="bank_name" />
                <x-admin-input col="md-6" name="Account Holder Name" fname="account_holder_name" />
                <x-admin-input col="md-6" name="Account Number" fname="account_number" />
                <x-admin-input col="md-6" name="IFSC code" fname="ifsc_code" />
                <x-admin-input col="md-6" name="Bank Phone" fname="bank_phone" />
                <x-admin-input col="md-6" name="Bank Address" fname="bank_address" />
                <x-admin-switch-btn col="md-6" name="Enabled" on="true" off="false" checked="true" />
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit">Save</button>
            <a href="{{ route('admin.accounts.index') }}" class="btn btn-secondary">Close</a>
        </div>
    </div>
</form>
</x-admin-base>
