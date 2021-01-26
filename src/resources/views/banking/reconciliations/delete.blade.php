<a href="javascript:void(0);" class="btn btn-danger" data-toggle="modal" data-target="#delete-reconciliations-{{$reconciliation->id}}" aria-hidden="true">
    Delete
</a>
<x-admin-modal nobtn modalId="delete-reconciliations-{{$reconciliation->id}}" title="Delete Reconciliation?" action="{{ route('admin.reconciliations.destroy', [$reconciliation])}}" method="POST">
    @method('delete')
    <h3>Do you really want to delete?</h3>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Yes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
    </x-slot>
</x-admin-modal>
