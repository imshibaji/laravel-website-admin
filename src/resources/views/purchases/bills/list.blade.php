<x-admin-base title="Bills List">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Bills List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="" class="btn btn-success">Add Customer</a>
                </div>
            </div>
            <x-admin-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Number</th>
                        <th>Vendor</th>
                        <th>Amount</th>
                        <th>Bill Date</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th class="text-center">Actions</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                        <td>Bil-00001</td>
                        <td>Mr. Joy</td>
                        <td>Rs. 1200</td>
                        <td>03 Jan 2021</td>
                        <td>09 Jan 2021</td>
                        <td><div class="badge badge-success">Paid</div></td>
                        <td class="d-flex flex-wrap">
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
