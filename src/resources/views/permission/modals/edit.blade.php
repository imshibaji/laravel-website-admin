<a href="#" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-permission-{{$permission->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-permission-{{$permission->id}}" type="secondary" title="Edit Permission" action="{{ route('admin.permission.update', [$permission])}}" method="POST">
    @method('PUT')
    <div>
        <h5>Permission Information</h5>
        <div class="form-group col-12">
            <label for="editFullName-{{$permission->id}}">Permission Name</label>
            <input type="text" class="form-control" name="name" id="editFullName-{{$permission->id}}" value="{{$permission->name}}">
        </div>
        <div class="form-group col-12">
            <label for="editGuardName-{{$permission->id}}">Guard Name</label>
            <input type="text" class="form-control" readonly name="guard_name" id="editGuardName-{{$permission->id}}" value="{{$permission->guard_name}}">
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
