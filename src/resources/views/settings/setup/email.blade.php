<x-admin-base title="Email Setup" item2="All Setup" link2="{{route('admin.business')}}">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <x-admin-datatable></x-admin-datatable>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <form action="{{ route('admin.business.setup.email.post') }}" method="POST">
                @csrf
            <div class="card">
                <div class="card-header">
                    <h5>Email Gateway Setup</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <x-admin-input name="Name" fname="name" />
                        <x-admin-input name="Gateway Link" fname="gateway_link" />
                        <x-admin-input name="Username" fname="username" />
                        <x-admin-input name="Password" fname="password" />
                        <x-admin-textarea name="Description" fname="description" />
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button class="btn btn-success" type="submit">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
            </form>
        </div>
    </div>



</x-admin-base>
