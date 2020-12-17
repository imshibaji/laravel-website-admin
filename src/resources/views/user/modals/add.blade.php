<x-admin-modal btnname="Add User" type="secondary" title="Add User" action="/admin/user" method="POST">
    <h5>User Information</h5>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="userFullName">Full Name</label>
            <input type="text" class="form-control" name="name" id="userFullName">
        </div>
        <div class="form-group col-12">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
        </div>
        <div class="form-group col-12">
            <label for="role">Role Select</label><br>
            <select id="role" name="role" class="select2 mb-3 select2-multiple" style="width: 100%"  data-placeholder="Choose">
                @foreach ($roles as $role)
                <option value="{{$role->name}}">{{ Str::ucfirst($role->name) }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group col-12">
            <label for="permission">Permissions Select</label><br>
            <select id="permission" name="permission[]" class="select2 mb-3 select2-multiple" style="width: 100%"  multiple="multiple" data-placeholder="Choose">
                @foreach ($permissions as $permission)
                <option value="{{$permission->name}}">{{ Str::ucfirst($permission->name) }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-12">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="password" id="exampleInputPassword1">
        </div>
        <div class="form-group col-12">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" class="form-control" name="confirm-password" id="exampleInputPassword2">
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
