<x-admin-base title="Categories List" item2="All Settings" link2="{{route('admin.business')}}">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                    <h3>Categories List</h3>
                </div>
                <div class="col-md-2 text-right">
                    <a href="{{ route('admin.categories.create') }}" class="btn btn-success">Add Category</a>
                </div>
            </div>
            <x-admin-datatable>
                <x-slot name="thead">
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Color</th>
                        <th>Enabled</th>
                        <th>Actions</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @foreach ($categories as $cat)
                    <tr>
                        <td>{{$cat->name}}</td>
                        <td>{{$cat->type}}</td>
                        <td>
                            <div style="width:24px;height:24px; border-radius:50%; background-color: {{$cat->color ?? 'brown'}}"></div>
                        </td>
                        <td>{{$cat->enabled}}</td>
                        <td>
                            <a href="{{ route('admin.categories.edit', $cat->id) }}" class="btn btn-warning">Edit</a>
                            @include('admin::settings.categories.delete')
                        </td>
                    </tr>
                    @endforeach
                </x-slot>
            </x-admin-datatable>
        </div>
    </div>
</x-admin-base>
