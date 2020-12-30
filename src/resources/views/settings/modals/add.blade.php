<x-admin-modal btnname="Add Setting" size="md" type="secondary" title="General" action="{{ config('admin.prefix', 'admin') }}/settings" method="POST">
    <h5>General Setting</h5>
    <div class="form-row">
        <x-admin-input name="Website URL" col="6" fname="website" placeholder="Input Main Website URL" />
        <x-admin-input name="Analytics ID" col="6" fname="analytics_id" placeholder="Google Analytics ID for Tracking" />
        <x-admin-select2 name="Select Business" fname="business_id" placeholder="Select A Business">
            @slot('option')
                <option value="1">Medust Technology</option>
                <option value="2">LARNR Education</option>
            @endslot
        </x-admin-select2>
        <x-admin-devider></x-admin-devider>

        <x-admin-input name="Website Title" fname="site_title" placeholder="Input A Webapp Name" />
        <x-admin-input name="Meta Keywords" fname="site_meta_keywords" placeholder="Input A Meta Keywords" />
        <x-admin-input name="Meta Description" fname="site_meta_description" placeholder="Input Short Description" />
        <x-admin-input name="Website Logo" type="file" fname="site_logo" placeholder="Input A Webapp Logo" />
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
