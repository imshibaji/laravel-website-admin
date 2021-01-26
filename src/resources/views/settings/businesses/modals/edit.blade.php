<a href="javascript:void(0);" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-user-{{$user->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-user-{{$user->id}}" type="secondary" title="Edit User" action="{{ route('admin.user.update', [$user])}}" method="POST">
    @method('PUT')
    <div>
        <h5>User Information</h5>
        <div class="form-row">
            <x-admin-input name="Full Name" fname="name" value="{{$user->name}}" />
            <x-admin-input type="email" name="Email address" fname="email" value="{{$user->email}}" />
            <x-admin-select2 name="Role Select" fname="role">
                <x-slot name="option">
                    @foreach ($roles as $role)
                    <option @if (checkRole($role->name, $user)) selected @endif value="{{$role->name}}">{{ Str::ucfirst($role->name) }}</option>
                    @endforeach
                </x-slot>
            </x-admin-select2>
            <x-admin-select2 name="Permissions Select" fname="permission[]" multiple="multiple">
                <x-slot name="option">
                    @foreach ($permissions as $permission)
                    <option @if (checkPermission($permission->name, $user)) selected @endif value="{{$permission->name}}">{{ Str::ucfirst($permission->name) }}</option>
                    @endforeach
                </x-slot>
            </x-admin-select2>
            <x-admin-input type="password" name="Password" fname="password" />
            <x-admin-input type="password" name="Confirm Password" name="confirm-password" />
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
