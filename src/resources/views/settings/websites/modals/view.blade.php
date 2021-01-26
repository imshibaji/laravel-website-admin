<a href="javascript:void(0);" class="text-info footable-edit mr-2">
    <i class="fa far fa-eye" data-toggle="modal" data-target="#view-user-{{$website->id}}" aria-hidden="true"></i>
    {{-- <i data-feather="eye"></i> --}}
</a>
<x-admin-modal nobtn modalId="view-user-{{$website->id}}" type="secondary" title="User Detail">
    <div>
        <h5>Role Information</h5>
        <div class="form-group col-12">
            <label for="userFullName">Website Name</label>
            <input type="text" class="form-control" readonly name="name" id="userFullName-{{$website->id}}" value="{{ $website->site_title }}">
        </div>
        <div class="form-group col-12">
            <label for="type">Website Url</label>
            <input type="text" class="form-control" readonly name="type" id="guardName-{{$website->id}}" value="{{ $website->website }}">
        </div>
        <div class="form-group col-12">
            <label for="value">Website Logo</label>
            <div id="value"><img src="{{ ($website->site_logo)? '/storage/websites/'.basename($website->site_logo) : '' }}" height="50px" /></div>
        </div>
    </div>
    <x-slot name="footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
