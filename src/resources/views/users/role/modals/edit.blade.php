<a href="javascript:void(0);" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-role-{{$role->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-role-{{$role->id}}" type="secondary" title="Edit Role" action="{{ route('admin.role.update', [$role])}}" method="POST">
    @method('PUT')
    <h5>Role Information</h5>
    <div class="form-row">
        <x-admin-input name="Role Name" fname="name" placeholder="Input Full Name" value="{{ $role->name }}" />
        <x-admin-input readonly name="Guard Name" fname="guard_name" value="{{ $role->guard_name }}" />
        <x-admin-select2 name="Permissions Select" fname="permission[]" multiple>
            <x-slot name="option">
            @foreach($permissions as $permission)
                <option @if (checkPermission($permission->name, $role)) selected @endif value="{{ $permission->name }}">{{ Str::ucfirst($permission->name) }}</option>
            @endforeach
            </x-slot>
        </x-admin-select2>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
