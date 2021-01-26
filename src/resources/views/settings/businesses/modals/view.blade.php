<a href="javascript:void(0);" class="text-info footable-edit mr-2">
    <i class="fa far fa-eye" data-toggle="modal" data-target="#view-user-{{$user->id}}" aria-hidden="true"></i>
    {{-- <i data-feather="eye"></i> --}}
</a>
<x-admin-modal nobtn modalId="view-user-{{$user->id}}" type="secondary" title="User Detail">
    <div>
        <h5>Full User Information</h5>
        <div class="form-row">
            <div class="form-group col-12">
                <label for="userFullName-{{$user->id}}">Full Name</label>
                <input type="text" class="form-control" name="name" readonly id="userFullName-{{$user->id}}" value="{{$user->name}}">
            </div>
            <div class="form-group col-12">
                <label for="exampleInputEmail-{{$user->id}}">Email address</label>
                <input type="email" class="form-control" name="email" readonly id="exampleInputEmail-{{$user->id}}" aria-describedby="emailHelp" value="{{$user->email}}">
                {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
            </div>
        </div>
    </div>
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
