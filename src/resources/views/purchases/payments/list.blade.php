<x-admin-base title="Payments List">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Payments List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="" class="btn btn-success">Add Payment</a>
                </div>
            </div>
            <x-admin-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Vendor</th>
                        <th>Category</th>
                        <th>Account</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($payments as $payment)
                    <tr>
                        <td>{{ $payment->transferred_at }}</td>
                        <td>Rs.{{ $payment->amount }}</td>
                        <td>{{ $payment->contact->name ?? '' }}</td>
                        <td>{{ $payment->category->name }}</td>
                        <td>{{ $payment->account->name }}</td>
                        <td class="text-center">
                            <a href="{{route('admin.payments.show', $payment->id) }}" class="btn btn-primary">View</a>
                            <a href="{{route('admin.payments.edit', $payment->id) }}" class="btn btn-warning">Edit</a>
                            <a href="{{route('admin.payments.destroy', $payment->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-admin-datatable>
        </div>
    </div>
</x-admin-base>
