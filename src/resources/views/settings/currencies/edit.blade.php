<x-admin-base nosidebar title="New Currency" item2="Currencies List" link2="{{ route('admin.currencies.index') }}">
    <form action="{{ route('admin.currencies.update', $currency->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="business_id" value="{{ business()->id }}" />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <x-admin-input col="md-6" name="Name" required value="{{ $currency->name }}" />
                    <x-admin-select col="md-6" name="Code" required>
                        <x-slot name="option">
                            <option value="">Choose Code</option>
                            @foreach ($codes as $k => $code)
                                <option @if($currency->code === $k) selected @endif value="{{ $k }}">{{ $k }} - {{ $code['name'] }}</option>
                            @endforeach
                        </x-slot>
                    </x-admin-select>
                    <x-admin-input col="md-6" name="Rate" required value="{{ $currency->rate }}" />
                    <x-admin-select col="md-6" name="Precision" required>
                        <x-slot name="option">
                            <option value="">Select Precision</option>
                            @foreach ($precisions as $precision)
                                <option @if($currency->precision == $precision) selected @endif value="{{ $precision }}">{{ $precision }}</option>
                            @endforeach
                        </x-slot>
                    </x-admin-select>
                    <x-admin-input col="md-6" name="Symbol" required value="{{ $currency->symbol }}" />
                    <x-admin-select col="md-6" name="Symbol Position">
                        <x-slot name="option">
                            <option value="">Select Symbol Position</option>
                            @foreach ($positions as $position)
                                <option @if($currency->symbol_position == $position['value']) selected @endif value="{{ $position['value'] }}">{{ $position['label'] }}</option>
                            @endforeach
                        </x-slot>
                    </x-admin-select>
                    <x-admin-input col="md-6" name="Decimal Mark" required value="{{ $currency->decimal_mark }}" />
                    <x-admin-input col="md-6" name="Thousand Separator" value="{{ $currency->thousand_separator }}" />

                    <x-admin-switch-btn col="md-6" name="Enabled" on="true" off="false" :checked="$currency->enabled" />
                    <x-admin-switch-btn col="md-6" name="Default Currency" fname="default" on="true" off="false" :checked="$currency->default" />
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-success" type="submit">Save</button>
                <a class="btn btn-secondary" href="{{ route('admin.currencies.index') }}">Close</a>
            </div>
        </div>
    </form>
</x-admin-base>
