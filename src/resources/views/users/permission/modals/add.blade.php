<x-admin-modal btnname="Add Permission" type="secondary" title="Add Permission" action="/admin/permission" method="POST">
    <h5>Permission Information</h5>
    <div class="form-row">
        <x-admin-input name="Permission Name" fname="name" placeholder="Permission name" />
        <x-admin-input name="Guard Name" readonly name="guard_name" value="web" />
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
