<x-admin-modal btnname="Add User" type="secondary" title="Add User" action="{{ config('admin.prefix', 'admin') }}/user" method="POST">
    <h5>User Information</h5>
    <div class="form-row">
        <x-admin-input name="Full Name" fname="name" placeholder="Full Name" />
        <x-admin-input type="email" name="Email Address" fname="email" placeholder="Email Address" />
        <x-admin-select2 name="Role Select" name="role">
            <x-slot name="option">
                @foreach ($roles as $role)
                <option value="{{$role->name}}">{{ Str::ucfirst($role->name) }}</option>
                @endforeach
            </x-slot>
        </x-admin-select2>
        <x-admin-select2 name="Permissions Select" fname="permission[]" multiple="multiple">
            <x-slot name="option">
                @foreach ($permissions as $permission)
                <option value="{{$permission->name}}">{{ Str::ucfirst($permission->name) }}</option>
                @endforeach
            </x-slot>
        </x-admin-select2>
        <x-admin-input type="password" name="Password" fname="password" />
        <x-admin-input type="password" name="Confirm Password" fname="confirm-password" />
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
