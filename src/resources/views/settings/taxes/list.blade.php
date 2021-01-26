<x-admin-base title="Taxes List" item2="All Settings" link2="{{route('admin.business')}}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Tax List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{ route('admin.taxes.create') }}" class="btn btn-success">Add Tax</a>
                </div>
            </div>
            <x-admin-datatable>
                @slot('thead')
                    <tr>
                        <th>Name</th>
                        <th>Rate</th>
                        <th>Type</th>
                        <th>Enabled</th>
                        <th>Actions</th>
                    </tr>
                @endslot
                @slot('tbody')
                    @foreach ($taxes as $tax)
                        <tr>
                            <td>{{$tax->name}}</td>
                            <td>{{$tax->rate}}</td>
                            <td>{{$tax->type}}</td>
                            <td>{{$tax->enabled}}</td>
                            <td>
                                <a href="{{ route('admin.taxes.edit', $tax->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                @include('admin::settings.taxes.delete')
                            </td>
                        </tr>
                    @endforeach
                @endslot
            </x-admin-datatable>
        </div>
    </div>
</x-admin-base>
