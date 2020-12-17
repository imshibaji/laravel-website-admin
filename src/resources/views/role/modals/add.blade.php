<x-admin-modal btnname="Add New Role" type="secondary" title="Add Role" action="/admin/role" method="POST">
    <h5>Role Information</h5>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="userFullName">Role Name</label>
            <input type="text" class="form-control" name="name" id="userFullName">
        </div>
        <div class="form-group col-12">
            <label for="guardName">Guard Name</label>
            <input type="text" class="form-control" readonly name="guard_name" id="guardName" value="web">
        </div>
        <div class="form-group col-12">
            <label for="permission">Permissions Select</label>
            <select id="permission" name="permission[]" class="select2 mb-3 select2-multiple" style="width: 100%"  multiple="multiple" data-placeholder="Choose">
                @foreach ($permissions as $permission)
                <option value="{{$permission->name}}">{{ Str::ucfirst($permission->name) }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
