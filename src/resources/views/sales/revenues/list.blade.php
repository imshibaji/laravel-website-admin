<x-admin-base title="Revenue List">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Revenues List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{route('admin.revenues.create')}}" class="btn btn-success">Add Revenue</a>
                </div>
            </div>
            <x-admin-datatable>
                @slot('thead')
                    <tr>
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Customer</th>
                        <th>Category</th>
                        <th>Account</th>
                        <th>Actions</th>
                    </tr>
                @endslot
                @slot('tbody')
                @foreach ($revenues as $rev)
                    <tr>
                        <td>{{$rev->transferred_at}}</td>
                        <td>{{$rev->amount}}</td>
                        <td>{{$rev->contact->name ?? ''}}</td>
                        <td>{{$rev->category->name}}</td>
                        <td>{{$rev->account->name}}</td>
                        <td>
                            <a href="" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                            <a href="" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                        </td>
                    </tr>
                @endforeach
                @endslot
            </x-admin-datatable>
        </div>
    </div>
</x-admin-base>
