<a href="#" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-user-{{$user->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-user-{{$user->id}}" type="secondary" title="Edit User" action="{{ route('admin.user.update', [$user])}}" method="POST">
    @method('PUT')
    <div>
        <h5>User Information</h5>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="userName-{{$user->id}}">Full Name</label>
                <input type="text" class="form-control" name="name" id="userName-{{$user->id}}" value="{{$user->name}}">
            </div>
            <div class="form-group col-12">
                <label for="exampleEmail-{{$user->id}}">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleEmail-{{$user->id}}" aria-describedby="emailHelp" value="{{$user->email}}">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>

            <div class="form-group col-12">
                <label for="role{{$user->id}}">Role Select</label><br>
                <select id="role{{$user->id}}" name="role" class="select2 mb-3 select2-multiple" style="width: 100%"  data-placeholder="Choose">
                    @foreach ($roles as $role)
                    <option @if (checkRole($role->name, $user)) selected @endif value="{{$role->name}}">{{ Str::ucfirst($role->name) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-12">
                <label for="permission{{$user->id}}">Permissions Select</label><br>
                <select id="permission{{$user->id}}" name="permission[]" class="select2 mb-3 select2-multiple" style="width: 100%"  multiple="multiple" data-placeholder="Choose">
                    @foreach ($permissions as $permission)
                    <option @if (checkPermission($permission->name, $user)) selected @endif value="{{$permission->name}}">{{ Str::ucfirst($permission->name) }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-12">
                <label for="examplePassword-{{$user->id}}">Password</label>
                <input type="password" class="form-control" name="password" id="examplePassword-{{$user->id}}">
            </div>
            <div class="form-group col-12">
                <label for="exampleCnfPassword-{{$user->id}}">Confirm Password</label>
                <input type="password" class="form-control" name="confirm-password" id="exampleCnfPassword-{{$user->id}}">
            </div>
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
