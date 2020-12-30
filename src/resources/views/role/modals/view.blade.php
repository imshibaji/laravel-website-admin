<a href="javascript:void(0);" class="text-info footable-edit mr-2">
    <i class="fa far fa-eye" data-toggle="modal" data-target="#view-user-{{$role->id}}" aria-hidden="true"></i>
    {{-- <i data-feather="eye"></i> --}}
</a>
<x-admin-modal nobtn modalId="view-user-{{$role->id}}" type="secondary" title="User Detail">
    <div>
        <h5>Role Information</h5>
        <div class="form-group col-12">
            <label for="userFullName">Role Name</label>
            <input type="text" class="form-control" readonly name="name" id="userFullName-{{$role->id}}" value="{{ $role->name }}">
        </div>
        <div class="form-group col-12">
            <label for="guardName">Guard Name</label>
            <input type="text" class="form-control" readonly name="guard_name" id="guardName-{{$role->id}}" value="{{ $role->guard_name }}">
        </div>
        <div class="form-group col-12">
            <div>Permissions</div>
            @foreach ($role->permissions as $item)
                <div class="badge badge-primary">{{$item->name}}</div>
            @endforeach
        </div>
    </div>
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
