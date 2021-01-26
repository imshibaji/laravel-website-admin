<x-admin-base title="Invoices">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Invoices List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{ route('admin.invoices.create') }}" class="btn btn-success">Add Invoice</a>
                </div>
            </div>
            <x-admin-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Number</th>
                        <th>Customer</th>
                        <th>Amount</th>
                        <th>Invoice Date</th>
                        <th>Due Date</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($invoices as $inv)
                    <tr>
                        <td>{{$inv->invoice_number}}</td>
                        <td>{{$inv->contact_name}}</td>
                        <td>₹{{ $inv->total_amount }}</td>
                        <td>{{ dtformat('dS M Y',$inv->invoiced_at) }}</td>
                        <td>{{ dtformat('dS F Y',$inv->due_at) }}</td>
                        <td class="text-center"><div class="badge badge-success">{{$inv->status}}</div></td>
                        <td class="text-center">
                            <a href="{{ route('admin.invoices.show', $inv->id)}}" class="btn btn-primary">View</a>
                            <a href="{{ route('admin.invoices.edit', $inv->id)}}" class="btn btn-warning">Edit</a>
                            @include('admin::sales.invoices.delete')
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-admin-datatable>
        </div>
    </div>
</x-admin-base>
