<x-admin-base title="Currencies List" item2="All Settings" link2="{{route('admin.business')}}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Currencies List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{ route('admin.currencies.create') }}" class="btn btn-success">Add Currency</a>
                </div>
            </div>
            <x-admin-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Rate</th>
                        <th>Enabled</th>
                        <th>Default</th>
                        <th>Actions</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($currencies as $currency)
                    <tr>
                        <td>{{ $currency->name }}</td>
                        <td>{{ $currency->code }}</td>
                        <td>{{ $currency->rate }}</td>
                        <td>{{ $currency->enabled }}</td>
                        <td>{{ $currency->default }}</td>
                        <td>
                            <a href="{{ route('admin.currencies.edit', $currency->id) }}" class="btn btn-warning">Edit</a>
                            @include('admin::settings.currencies.delete')
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-admin-datatable>
        </div>
    </div>
</x-admin-base>
