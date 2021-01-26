<x-admin-base nosidebar title="Edit Transfer" item2="All Transfers" link2="{{ route('admin.transfers.index') }}">
    <form action="{{ route('admin.transfers.update', $transfer->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <x-admin-select col="md-6" name="From Account" fname="from_account_id" required>
                        <x-slot name="option">
                            <option value="">Select From Account</option>
                            @foreach ($accounts as $key => $val)
                                <option @if($key==$transfer->from_account_id) selected @endif value="{{$key}}">{{$val}}</option>
                            @endforeach
                        </x-slot>
                    </x-admin-select>
                    <x-admin-select col="md-6" name="To Account" fname="to_account_id" required>
                        <x-slot name="option">
                            <option value="">Select From Account</option>
                            @foreach ($accounts as $key => $val)
                                <option @if($key==$transfer->to_account_id) selected @endif  value="{{$key}}">{{$val}}</option>
                            @endforeach
                        </x-slot>
                    </x-admin-select>
                    <x-admin-input col="md-6" name="Amount" required value="{{ $transfer->amount }}" />
                    <x-admin-input col="md-6" name="Date" fname="transferred_at" type="date" required value="{{ $transfer->transferred_at }}" />
                    <x-admin-textarea name="Description" value="{{ $transfer->description }}" />
                    <x-admin-select col="md-6" name="Payment Method" fname="payment_method" required>
                        <x-slot name="option">
                            <option value="">Select From Account</option>
                            @foreach ($accounts as $key => $val)
                                <option @if($key==$transfer->payment_method) selected @endif value="{{$key}}">{{$val}}</option>
                            @endforeach
                        </x-slot>
                    </x-admin-select>
                    <x-admin-input col="md-6" name="Reference" value="{{ $transfer->reference }}" />
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
