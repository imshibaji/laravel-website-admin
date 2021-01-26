<a href="#" class="text-danger footable-delete">
    <span class="fooicon fooicon-trash" data-toggle="modal" data-target="#delete-permission-{{$permission->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="delete-permission-{{$permission->id}}" title="Delete Permission" action="{{ route('admin.permission.destroy', [$permission])}}" method="POST">
    @method('delete')
    <h3>Do you really want to delete?</h3>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    </x-slot>
</x-admin-modal>
