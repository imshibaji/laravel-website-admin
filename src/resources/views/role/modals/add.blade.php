<x-admin-modal btnname="Add New Role" type="secondary" title="Add Role" action="/admin/role" method="POST">
    <h5>Role Information</h5>
    <div class="form-row">
        <x-admin-input name="Role Name" fname="name" placeholder="Input A Role Name" />
        <x-admin-input name="Guard Name" readonly fname="guard_name" placeholder="Input A Guard Name" value="web" />
        <x-admin-select2 name="Permissions Select"  fname="permission[]" multiple>
            <x-slot name="option">
                @foreach ($permissions as $permission)
                    <option value="{{$permission->name}}">{{ Str::ucfirst($permission->name) }}</option>
                @endforeach
            </x-slot>
        </x-admin-select2>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
