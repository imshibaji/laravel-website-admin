<x-admin-base title="Contact List">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Customers List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{ route('admin.contacts.create') }}" class="btn btn-success">Add Customer</a>
                </div>
            </div>
            <x-admin-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Enabled</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($customers as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{ ($contact->enabled == 'true')? 'Enabled' : 'Disabled' }}</td>
                            <td class="text-center">
                                <a class="btn btn-primary" href="{{ route('admin.customers.show', $contact->id) }}">View</a>
                                <a class="btn btn-warning" href="{{ route('admin.contacts.edit', $contact->id) }}">Edit</a>
                                @include('admin::contacts.delete')
                            </td>
                        </tr>
                    @endforeach
                </x-slot>
            </x-admin-datatable>
        </div>
    </div>
</x-admin-base>
