<x-admin-modal btnname="Add Permission" type="secondary" title="Add Permission" action="/admin/permission" method="POST">
    <h5>Permission Information</h5>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="userFullName">Permission Name</label>
            <input type="text" class="form-control" name="name" id="userFullName">
        </div>
        <div class="form-group col-12">
            <label for="guardName">Guard Name</label>
            <input type="text" class="form-control" readonly name="guard_name" id="guardName" value="web">
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
