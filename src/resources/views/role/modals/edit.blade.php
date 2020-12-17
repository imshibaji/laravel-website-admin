<a href="#" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-role-{{$role->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-role-{{$role->id}}" type="secondary" title="Edit Role" action="{{ route('admin.role.update', [$role])}}" method="POST">
    @method('PUT')
    <h5>Role Information</h5>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="editUserFullName{{$role->id}}">Role Name</label>
            <input type="text" class="form-control" id="editUserFullName{{$role->id}}" name="name" placeholder="Input Full Name" value="{{ $role->name }}" />
        </div>
        <div class="form-group col-12">
            <label for="editGuardName{{$role->id}}">Guard Name</label>
            <input type="text" class="form-control" readonly name="guard_name" id="editGuardName{{$role->id}}" value="{{ $role->guard_name }}">
        </div>
        <div class="form-row col-12">
            <label for="permission{{$role->id}}">Permissions Select</label>
            <select id="permission{{$role->id}}" name="permission[]" class="select2 mb-3 select2-multiple" style="width: 100%"  multiple="multiple" data-placeholder="Choose">
                @foreach($permissions as $permission)
                    <option @if (checkPermission($permission->name, $role)) selected @endif value="{{ $permission->name }}">{{ Str::ucfirst($permission->name) }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
