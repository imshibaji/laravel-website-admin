<x-admin-base nosidebar title="Edit Account" item2="All Accounts" link2="{{ route('admin.accounts.index') }}">
    <form action="{{ route('admin.accounts.update', $account->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="id" value="{{ $account->id }}">
        <input type="hidden" name="business_id" value="{{ business()->id }}">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <x-admin-input col="md-6" name="name" value="{{ $account->name }}" />
                    <x-admin-select col="md-6" name="Currency" fname="currency_code">
                        <x-slot name="option">
                            <option value="">Select Currency</option>
                            @foreach ($currencies ?? '' as $currency)
                                <option @if($currency->code == $account->currency_code) selected @endif value="{{$currency->code}}">{{$currency->name}}</option>
                            @endforeach
                        </x-slot>
                    </x-admin-select>
                    <x-admin-input col="md-6" name="Opening balance" type="number" value="{{ $account->opening_balance }}" />
                    <x-admin-input col="md-6" name="Bank name" fname="bank_name" value="{{ $account->bank_name }}" />
                    <x-admin-input col="md-6" name="Account Holder Name" fname="account_holder_name" value="{{ $account->account_holder_name }}" />
                    <x-admin-input col="md-6" name="Account Number" fname="account_number" value="{{ $account->account_number }}" />
                    <x-admin-input col="md-6" name="IFSC code" fname="ifsc_code" value="{{ $account->ifsc_code }}" />
                    <x-admin-input col="md-6" name="Bank Phone" fname="bank_phone" value="{{ $account->bank_phone }}" />
                    <x-admin-input col="md-6" name="Bank Address" fname="bank_address" value="{{ $account->bank_address }}" />
                    <x-admin-switch-btn col="md-6" name="Enabled" on="true" off="false" :checked="$account->enabled" />
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-success" type="submit">Save</button>
                <a href="{{ route('admin.accounts.index') }}" class="btn btn-secondary">Close</a>
            </div>
        </div>
    </form>
</x-admin-base>
