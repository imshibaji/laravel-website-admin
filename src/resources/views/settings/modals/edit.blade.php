<a href="#" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-setting-{{$setting->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-setting-{{$setting->id}}" type="secondary" title="Edit Settings" action="{{ route('admin.settings.update', [$setting])}}" method="POST">
    @method('PUT')
    <h5>Role Information</h5>
    <div class="form-row">
        <x-admin-input name="Website Link" col="6" fname="website" value="{{$setting->website}}" />
        <x-admin-input name="Analytics ID" col="6" fname="analytics_id" value="{{$setting->analytics_id}}" />
        <x-admin-select2 name="Select Business" fname="business_id" placeholder="Select A Business">
            @slot('option')
                <option @if($setting->business_id == 1) selected @endif value="1">Medust Technology</option>
                <option @if($setting->business_id == 2) selected @endif value="2">LARNR Education</option>
            @endslot
        </x-admin-select2>
        <x-admin-input name="Website Title" fname="site_title" value="{{$setting->site_title}}" />
        <x-admin-input name="Meta Keywords" fname="site_meta_keywords" value="{{$setting->site_meta_keywords}}" />
        <x-admin-input name="Meta Description" fname="site_meta_description" value="{{$setting->site_meta_description}}" />
        <x-admin-input name="Website Logo" type="file" fname="site_logo" value="{{$setting->site_logo}}" />
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
