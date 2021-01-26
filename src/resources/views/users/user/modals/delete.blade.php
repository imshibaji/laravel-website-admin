<a href="javascript:void(0);" class="text-danger footable-delete">
    <span class="fooicon fooicon-trash" data-toggle="modal" data-target="#delete-user-{{$user->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="delete-user-{{$user->id}}" title="Delete User" action="{{ route('admin.user.destroy', [$user])}}" method="POST">
    @method('delete')
    <h3>Do you really want to delete?</h3>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    </x-slot>
</x-admin-modal>
