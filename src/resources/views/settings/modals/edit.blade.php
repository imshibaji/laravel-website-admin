<a href="#" class="text-info footable-edit mr-2">
    <span class="fooicon fooicon-pencil" data-toggle="modal" data-target="#edit-setting-{{$setting->id}}" aria-hidden="true"></span>
</a>
<x-admin-modal nobtn modalId="edit-setting-{{$setting->id}}" type="secondary" title="Edit Settings" action="{{ route('admin.settings.update', [$setting])}}" method="POST">
    @method('PUT')
    <h5>Role Information</h5>
    <div class="form-row">
        <div class="form-group col-12">
            <label for="editSettingName{{$setting->id}}">Setting Name</label>
            <input type="text" class="form-control" id="editUserFullName{{$setting->id}}" name="name" placeholder="Input Full Name" value="{{ $setting->name }}" />
        </div>
        <div class="form-group col-12">
            <label for="editType{{$setting->id}}">Type Name</label>
            <input type="text" class="form-control" readonly name="type" id="editType{{$setting->id}}" value="{{ $setting->type }}">
        </div>
        <div class="form-row col-12">
            <label for="setting{{$setting->id}}">Settings</label>
            <input type="text" class="form-control" name="value[]" id="value{{$setting->id}}" value="value">
        </div>
    </div>
    <x-slot name="footer">
        <button class="btn btn-success" type="submit">Submit</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    </x-slot>
</x-admin-modal>
