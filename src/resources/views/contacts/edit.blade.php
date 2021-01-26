<x-admin-base nosidebar title="Edit Contact" item2="Contacts" link2="{{ route('admin.contacts.index') }}">
    <form action="{{ route('admin.contacts.update', $contact->id) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="business_id" value="{{ business()->id }}" />
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <x-admin-input col="md-6" name="Name" required  value="{{ $contact->name }}" />
                    <x-admin-input col="md-6" name="Email" value="{{ $contact->email }}" />
                    <x-admin-input col="md-6" name="Phone" value="{{ $contact->phone }}" />
                    <x-admin-input col="md-6" name="Tax Number" value="{{ $contact->tax_number }}" />

                    <x-admin-textarea name="Address" value="{{ $contact->address }}" />
                    <x-admin-input col="md-6" name="Website" value="{{ $contact->website }}" />
                    <x-admin-select col="md-6" name="Currency" fname="currency_code">
                        <x-slot name="option">
                            <option @if($contact->currency_code === 'INR') selected @endif value="INR">Indian Rupees</option>
                            <option @if($contact->currency_code === 'USD') selected @endif value="USD">United State Doller</option>
                        </x-slot>
                    </x-admin-select>

                    <x-admin-input col="md-6" name="Reference" value="{{ $contact->reference }}" />
                    <x-admin-select col="md-6" name="Type">
                        <x-slot name="option">
                            <option @if($contact->type === 'customer') selected @endif value="customer">Customer</option>
                            <option @if($contact->type === 'vendor') selected @endif value="vendor">Vendor</option>
                        </x-slot>
                    </x-admin-select>
                    <x-admin-switch-btn col="md-6" name="Enabled" on="true" off="false" checked="{{ $contact->enabled }}" />
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn btn-success" type="submit">Save</button>
                <a class="btn btn-secondary" href="{{ route('admin.contacts.index') }}">Close</a>
            </div>
        </div>
    </form>
</x-admin-base>
