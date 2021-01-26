<x-admin-base title="New Item" nosidebar item2="Items List" link2="{{route('admin.items.index')}}">
<form action="{{route('admin.items.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="page" value="{{request()->page ?? ''}}">
    <div class="card">
    <div class="card-body">
        <div class="row">
            <x-admin-input col="md-4" name="Serial No" fname="sku" required placeholder="Input Product Serial No." />
            <x-admin-input col="md-4" name="Name" required icon="fa fa-tag" />
            <x-admin-select col="md-4" name="Tax" fname="tax_id" icon="fa fa-percentage">
                <x-slot name="option">
                    @forelse ($taxes as $tax)
                        <option value="{{$tax->id}}">{{$tax->name}} {{$tax->rate}}%</option>
                    @empty
                        <option value="0">None</option>
                    @endforelse
                </x-slot>
            </x-admin-select>
            <x-admin-textarea name="Description" fname="description" />
            <x-admin-input col="md-6" name="Sale Price" required icon="fa fa-money-bill-wave" />
            <x-admin-input col="md-6" name="Purchase Price" required icon="fa fa-money-bill-wave-alt" />
            <x-admin-select col="md-6" name="Category" fname="category_id" icon="far fa-folder">
                <x-slot name="option">
                    @forelse ($categories as $cat)
                        <option value="{{$cat->id}}">{{$cat->name}}</option>
                    @empty
                        <option value="0">None</option>
                    @endforelse
                </x-slot>
            </x-admin-select>
            <x-admin-switch-btn col="md-6" Name="Enabled" checked="enabled" on="enabled" off="disabled" />
            <x-admin-file-uploader name="Image" />
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-success" type="submit">Save</button>
        <a href="{{route('admin.items.index')}}" class="btn btn-warning" >Cancel</a>
    </div>
    </div>
</form>
</x-admin-base>
