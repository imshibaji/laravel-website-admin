<a href="#" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-permission-{{$permission->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-permission-{{$permission->id}}" type="secondary" title="Edit Permission" action="{{ route('admin.permission.update', [$permission])}}" method="POST">
    @method('PUT')
    <div>
        <h5>Permission Information</h5>
        <x-admin-input name="Permission Name" fname="name" value="{{$permission->name}}" />
        <x-admin-input name="Guard Name" readonly name="guard_name" value="{{$permission->guard_name}}" />
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
