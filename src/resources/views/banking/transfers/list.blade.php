<x-admin-base title="Transfers">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-10">
                <h3>Transfers List</h3>
            </div>
            <div class="col-md-2 text-right">
                <a href="{{ route('admin.transfers.create') }}" class="btn btn-success">Add Transfer</a>
            </div>
        </div>
        <x-admin-datatable>
            <x-slot name="thead">
                <tr>
                    <th>Date</th>
                    <th>From Account</th>
                    <th>To Account</th>
                    <th>Amount</th>
                    <th class="text-center">Actions</th>
                </tr>
            </x-slot>
            <x-slot name="tbody">
                @foreach ($transfers as $transfer)
                <tr>
                    <td>{{ dtformat('dS F Y', $transfer->paid_at) }}</td>
                    <td>{{ $transfer->from_account }}</td>
                    <td>{{ $transfer->to_account }}</td>
                    <td>Rs.{{ $transfer->amount }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.transfers.edit', $transfer->id)}}" class="btn btn-warning">Edit</a>
                        @include('admin::banking.transfers.delete')
                    </td>
                </tr>
                @endforeach
            </x-slot>
        </x-admin-datatable>
    </div>
</div>
</x-admin-base>
