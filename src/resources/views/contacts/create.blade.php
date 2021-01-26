<x-admin-base nosidebar title="New Contact" item2="Contacts" link2="{{ route('admin.contacts.index') }}">
<form action="{{ route('admin.contacts.store') }}" method="post">
    @csrf
    <input type="hidden" name="business_id" value="{{ business()->id }}" />
    <div class="card">
        <div class="card-body">
            <div class="row">
                <x-admin-input col="md-6" name="Name" required />
                <x-admin-input col="md-6" name="Email" />
                <x-admin-input col="md-6" name="Phone" />
                <x-admin-input col="md-6" name="Tax Number" />

                <x-admin-textarea name="Address" />
                <x-admin-input col="md-6" name="Website" />
                <x-admin-select col="md-6" name="Choose Currency" fname="currency_code">
                    <x-slot name="option">
                        <option value="INR">Indian Rupees</option>
                        <option value="USD">United State Doller</option>
                    </x-slot>
                </x-admin-select>

                <x-admin-input col="md-6" name="Reference" />
                <x-admin-select col="md-6" name="Type">
                    <x-slot name="option">
                        <option value="customer">Customer</option>
                        <option value="vendor">Vendor</option>
                    </x-slot>
                </x-admin-select>
                <x-admin-switch-btn col="md-6" name="Enabled" on="true" off="false" checked="true" />
            </div>
        </div>
        <div class="card-footer text-right">
            <button class="btn btn-success" type="submit">Save</button>
            <a class="btn btn-secondary" href="{{ route('admin.contacts.index') }}">Close</a>
        </div>
    </div>
</form>
</x-admin-base>
