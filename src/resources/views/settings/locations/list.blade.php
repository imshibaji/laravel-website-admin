<x-admin-base title="Branches" item2="All Settings" link2="{{ route('admin.business') }}">
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <x-admin-datatable>
                    <x-slot name="thead">
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Branch Head</th>
                            <th>Actions</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($locations as $location)
                        <tr>
                            <td>{{ $location->location_name ?? '' }}</td>
                            <td>
                                {{ $location->address1 ?? '' }},
                                {{ $location->address2 ?? '' }},
                                {{ $location->city ?? '' }},
                                {{ $location->state ?? '' }},
                                {{ $location->country->name ?? '' }},
                                {{ $location->zip ?? '' }}
                            </td>
                            <td>{{ $location->user->name ?? '' }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('admin.locations.edit', $location->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    @include('admin::settings.locations.delete')
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </x-slot>
                </x-admin-datatable>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <form action="{{ route('admin.locations.store') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $loc->id ?? ''}}">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <x-admin-input name="Location name" value="{{ $loc->location_name ?? '' }}" />
                        <x-admin-input name="Address 1" fname="address1" value="{{ $loc->address1 ?? '' }}" />
                        <x-admin-input name="Address 2" fname="address2" value="{{ $loc->address2 ?? '' }}" />
                        <x-admin-input name="City" value="{{ $loc->city ?? '' }}" />
                        <x-admin-input name="State" value="{{ $loc->state ?? '' }}" />
                        <x-admin-select name="country" fname="country_id">
                            <x-slot name="option">
                                <option value="">Choose Country</option>
                                @foreach (business()->countries() as $cntry)
                                    <option @if(isset($loc->country_id) && ($loc->country_id == $cntry->id)) selected @endif value="{{$cntry->id}}">{{$cntry->name}}</option>
                                @endforeach
                            </x-slot>
                        </x-admin-select>
                        <x-admin-input name="Zip" type="number" value="{{ $loc->zip ?? '' }}" />
                        <x-admin-select name="Branch Head" fname="user_id" value="{{ $loc->user_id ?? '' }}">
                            <x-slot name="option">
                                <option value="">Choose User</option>
                                @foreach ($users as $user)
                                    <option @if(isset($loc->user_id) && ($loc->user_id == $user->id)) selected @endif value="{{$user->id}}">{{$user->name}}</option>
                                @endforeach
                            </x-slot>
                        </x-admin-select>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
</x-admin-base>
