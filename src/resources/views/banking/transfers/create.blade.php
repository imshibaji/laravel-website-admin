<x-admin-base nosidebar title="New Transfer" item2="All Transfers" link2="{{ route('admin.transfers.index') }}">
<form action="{{ route('admin.transfers.store') }}" method="post">
    @csrf
    <div class="card">
        <div class="card-body">
            <div class="row">
                <x-admin-select col="md-6" name="From Account" fname="from_account_id" required>
                    <x-slot name="option">
                        <option value="">Select From Accont</option>
                        @foreach ($accounts as $account)
                            <option value="{{$account->id}}">{{$account->name}}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-select col="md-6" name="To Account" fname="to_account_id" required>
                    <x-slot name="option">
                        <option value="">Select From Accont</option>
                        @foreach ($accounts as $account)
                            <option value="{{$account->id}}">{{$account->name}}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-input col="md-6" name="Amount" required />
                <x-admin-input col="md-6" name="Date" type="date" fname="transferred_at" required />
                <x-admin-textarea name="Description" />
                <x-admin-select col="md-6" name="Payment Method" fname="payment_method" required>
                    <x-slot name="option">
                        <option value="">Select From Accont</option>
                        @foreach ($accounts as $account)
                            <option value="{{$account->id}}">{{$account->name}}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-input col="md-6" name="Reference" />
            </div>
        </div>
        <div class="card-footer text-right">
            <div class="btn-group">
                <button type="submit" class="btn btn-success">Save</button>
                <a class="btn btn-secondary" href="{{ route('admin.transfers.index') }}">Close</a>
            </div>
        </div>
    </div>
</form>
</x-admin-base>
