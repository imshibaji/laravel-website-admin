<x-admin-base title="Reconciliations">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <h3>Reconciliations List</h3>
            </div>
            <div class="col-md-2 text-right">
                <a href="{{ route('admin.reconciliations.create') }}" class="btn btn-success">Add Reconciliation</a>
            </div>
        </div>
        <x-admin-datatable>
            <x-slot name="thead">
                <tr>
                    <th>Created Date</th>
                    <th>Account</th>
                    <th>Period</th>
                    <th>Closing Balance</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </x-slot>
            <x-slot name="tbody">
                <tr>
                    <td>23rd Dec 2020</td>
                    <td>Cash</td>
                    <td>1st Dec 2020 - 31st Dec2020</td>
                    <td>Rs. 0.00</td>
                    <td><div class="badge badge-success">RECONCILED</div></td>
                    <td class="text-center">
                        <a href="" class="btn btn-primary">View</a>
                        <a href="" class="btn btn-warning">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            </x-slot>
        </x-admin-datatable>
    </div>
</div>
</x-admin-base>
