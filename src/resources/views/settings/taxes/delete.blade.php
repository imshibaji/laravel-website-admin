<a href="javascript:void(0);" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-taxes-{{$tax->id}}" aria-hidden="true">
    Delete
</a>
<x-admin-modal nobtn modalId="delete-taxes-{{$tax->id}}" title="Tax Delete?" action="{{ route('admin.taxes.destroy', [$tax])}}" method="POST">
    @method('delete')
    <h3>Do you really want to delete?</h3>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    </x-slot>
</x-admin-modal>
