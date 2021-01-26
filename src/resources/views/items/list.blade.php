<x-admin-base title="Items List">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h3>Items List</h3>
                <p>Here is products list of your businesss.</p>
            </div>
            <div class="col-md-4 text-md-right my-auto">
                <a href="{{route('admin.items.create')}}" class="btn btn-primary">Add New Item</a>
            </div>
        </div>
        <x-admin-datatable>
            <x-slot name="thead">
                <tr>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Sale Price</th>
                    <th>Purchage Price</th>
                    <th>Quantity</th>
                    <th>Enabled</th>
                    <th class="text-center">Actions</th>
                </tr>
            </x-slot>
            <x-slot name="tbody">
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->name}}</td>
                        <td>{{$item->category->name ?? ''}}</td>
                        <td>{{$item->sale_price}}</td>
                        <td>{{$item->purchase_price}}</td>
                        <td>{{$item->quantity}}</td>
                        <td>{{$item->enabled}}</td>
                        <td class="text-center">
                            <a href="{{route('admin.items.edit', [$item])}}" class="btn btn-warning">Edit</a>
                            @include('admin::items.delete')
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-admin-datatable>
    </div>
</div>
</x-admin-base>
