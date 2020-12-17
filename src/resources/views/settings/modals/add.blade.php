<x-admin-modal btnname="Add New Role" type="secondary" title="Add Role" action="/admin/settings" method="POST">
    <h5>Role Information</h5>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="userFullName">Setting Name</label>
            <input type="text" class="form-control" name="name" id="userFullName">
        </div>
        <div class="form-group col-12">
            <label for="type">Type Name</label>
            <input type="text" class="form-control" readonly name="type" id="type" value="admin">
        </div>
        <div class="form-group col-12">
            <label for="setting">Settings</label>
            <input type="text" class="form-control" name="value" id="value" value="value">
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
