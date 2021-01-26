<x-admin-base nosidebar title="New Category" item2="Categories" link2="{{ route('admin.categories.index') }}">
<form action="{{ route('admin.categories.store') }}" method="post">
    @csrf
    <input type="hidden" name="business_id" value="{{ business()->id }}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <x-admin-input col="md-6" name="name" required />
                <x-admin-select col="md-6" name="type" required>
                    <x-slot name="option">
                        @foreach ($types as $type)
                            <option value="{{ $type }}">{{ Str::ucfirst($type) }}</option>
                        @endforeach
                    </x-slot>
                </x-admin-select>
                <x-admin-input col="md-6" name="color" type="color" required/>
                <x-admin-switch-btn col="md-6" name="Enabled" on="true" off="false" checked="true" />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-success" type="submit">Save</button>
            <a class="btn btn-secondary" href="{{ route('admin.categories.index') }}">Close</a>
        </div>
    </div>
</form>
</x-admin-base>
