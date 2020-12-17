<a href="#" class="text-info footable-edit mr-2">
    <i class="fa far fa-eye" data-toggle="modal" data-target="#view-permission-{{$permission->id}}" aria-hidden="true"></i>
    {{-- <i data-feather="eye"></i> --}}
</a>
<x-admin-modal nobtn modalId="view-permission-{{$permission->id}}" type="secondary" title="Permission Detail">
    <div>
        <h5>Permission Information</h5>
        <div class="form-group col-12">
            <label for="deleteFullName-{{$permission->id}}">Permission Name</label>
            <input type="text" class="form-control" readonly name="name" id="deleteFullName-{{$permission->id}}" value="{{$permission->name}}">
        </div>
        <div class="form-group col-12">
            <label for="deleteGuardName-{{$permission->id}}">Guard Name</label>
            <input type="text" class="form-control" readonly name="guard_name" id="deleteGuardName-{{$permission->id}}" value="{{$permission->guard_name}}">
        </div>
    </div>
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
