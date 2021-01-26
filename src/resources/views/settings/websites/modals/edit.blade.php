<a href="#" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-setting-{{$website->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-setting-{{$website->id}}" type="secondary" title="Edit Settings" action="{{ route('admin.websites.update', [$website])}}" method="POST">
    @method('PUT')
    <h5>Role Information</h5>
    <div class="form-row">
        <x-admin-input name="Website Link" col="6" fname="website" value="{{$website->website}}" />
        <x-admin-input name="Analytics ID" col="6" fname="analytics_id" value="{{$website->analytics_id}}" />
        <x-admin-select2 name="Select Business" fname="business_id" placeholder="Select A Business">
            @slot('option')
                <option @if($website->business_id == 1) selected @endif value="1">Medust Technology</option>
                <option @if($website->business_id == 2) selected @endif value="2">LARNR Education</option>
            @endslot
        </x-admin-select2>
        <x-admin-input name="Website Title" fname="site_title" value="{{$website->site_title}}" />
        <x-admin-input name="Meta Keywords" fname="site_meta_keywords" value="{{$website->site_meta_keywords}}" />
        <x-admin-input name="Meta Description" fname="site_meta_description" value="{{$website->site_meta_description}}" />
        <x-admin-input name="Website Logo" type="file" fname="logo" value="{{$website->first()}}" />
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
