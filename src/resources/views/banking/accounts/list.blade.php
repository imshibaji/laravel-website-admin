<x-admin-base title="Accounts">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <h3>Accounts List</h3>
            </div>
            <div class="col-md-2 text-right">
                <a href="{{ route('admin.accounts.create') }}" class="btn btn-success">Add Account</a>
            </div>
        </div>
        <x-admin-datatable>
            <x-slot name="thead">
                <tr>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Current Balance</th>
                    <th>Enabled</th>
                    <th class="text-center">Actions</th>
                </tr>
            </x-slot>
            <x-slot name="tbody">
                @foreach ($accounts as $account)
                <tr>
                    <td>{{ $account->name }}</td>
                    <td>{{ $account->account_number }}</td>
                    <td>Rs.{{ $account->opening_balance }}</</td>
                    <td>{{ $account->enabled }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.accounts.show', $account->id) }}" class="btn btn-primary">View</a>
                        <a href="{{ route('admin.accounts.edit', $account->id) }}" class="btn btn-warning">Edit</a>
                        @include('admin::banking.accounts.delete')
                    </td>
                </tr>
                @endforeach
            </x-slot>
        </x-admin-datatable>
    </div>
</div>
</x-admin-base>
