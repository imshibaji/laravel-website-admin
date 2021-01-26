<x-admin-base nosidebar title="New Currency" item2="Currencies List" link2="{{ route('admin.currencies.index') }}">
<form action="{{ route('admin.currencies.store') }}" method="post">
    @csrf
    <input type="hidden" name="business_id" value="{{ business()->id }}" />
    <div class="card">
        <div class="card-body">
            <div class="row">
                <x-admin-input col="md-6" name="Name" required />
                <x-admin-select col="md-6" name="Code" required>
                    <x-slot name="option">
                        <option value="">Choose Code</option>
                        @foreach ($codes as $k => $code)
                            <option value="{{ $k }}">{{ $k }} - {{ $code['name'] }}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-input col="md-6" name="Rate" required />
                <x-admin-select col="md-6" name="Precision" required>
                    <x-slot name="option">
                        <option value="">Select Precision</option>
                        @foreach ($precisions as $precision)
                            <option value="{{ $precision }}">{{ $precision }}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-input col="md-6" name="Symbol" required />
                <x-admin-select col="md-6" name="Symbol Position">
                    <x-slot name="option">
                        <option value="">Select Symbol Position</option>
                        @foreach ($positions as $position)
                            <option value="{{ $position['value'] }}">{{ $position['label'] }}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-input col="md-6" name="Decimal Mark" required />
                <x-admin-input col="md-6" name="Thousand Separator" />

                <x-admin-switch-btn col="md-6" name="Enabled" on="true" off="false" checked="true" />
                <x-admin-switch-btn col="md-6" name="Default Currency" fname="default" on="true" off="false" checked="false" />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-success" type="submit">Save</button>
            <a class="btn btn-secondary" href="{{ route('admin.currencies.index') }}">Close</a>
        </div>
    </div>
</form>
</x-admin-base>
