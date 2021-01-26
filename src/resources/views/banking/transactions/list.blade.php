<x-admin-base title="Transations">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <h3>Transations List</h3>
            </div>
            <div class="col-md-6 text-right">
                <a href="{{ route('admin.revenues.create') }}" class="btn btn-success btn-sm">Add Income</a>
                <a href="{{ route('admin.payments.create') }}" class="btn btn-secondary btn-sm">Add Expanse</a>
            </div>
        </div>
        <x-admin-datatable>
            <x-slot name="thead">
                <tr>
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Type</th>
                    <th>Category</th>
                    <th>Account</th>
                    <th>Description</th>
                </tr>
            </x-slot>
            <x-slot name="tbody">
                @foreach ($transections as $transection)
                <tr>
                    <td>{{ dtformat('dS M Y', $transection->transferred_at) }}</td>
                    <td>Rs.{{ $transection->amount }}</td>
                    <td>{{ $transection->type }}</td>
                    <td>{{ $transection->category->name }}</td>
                    <td>{{ $transection->account->name }}</td>
                    <td>{{ $transection->description }}</td>
                </tr>
                @endforeach
            </x-slot>
        </x-admin-datatable>
    </div>
</div>
</x-admin-base>
