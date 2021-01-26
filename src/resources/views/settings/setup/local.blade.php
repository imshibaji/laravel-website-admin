<x-admin-base title="Localisation" item2="All Setup" link2="{{route('admin.business')}}">
    <div class="row">
        <div class="col-12">
            <form action="{{ config('admin.prefix', 'admin') }}/setup/local" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$business->id}}">
            <div class="card">
                <div class="card-header">
                    <h5>Localisation Setup</h5>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <x-admin-input type="date" name="Financial Year Start" col="6" fname="year_starting_date" value="{{ dtformat('Y-m-d', $business->year_starting_date)}}" />
                        <x-admin-select name="Time Zone" col="6" fname="time_zone">
                            <x-slot name="option">
                                @foreach ($timezones as $tz)
                                    <option @if($business->time_zone == $tz['value'] ) selected @endif value="{{$tz['value']}}">{{$tz['text']}}</option>
                                @endforeach
                            </x-slot>
                        </x-admin-select>

                        <x-admin-input name="Date Format" col="6" fname="date_format" placeholder="Input A Date Format" value="{{$business->date_format}}" />
                        <x-admin-input name="Date Separator" col="6" fname="date_separator" placeholder="Input A Date Separator" value="{{$business->date_separator}}" />

                        <x-admin-input name="Percent (%) Position" col="6" fname="percent_position" placeholder="Input After Position" value="{{$business->percent_position}}" />
                        <x-admin-input name="Discount Location" col="6" fname="discount_location" placeholder="At total" value="{{$business->discount_location}}" />
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
</div>
</x-admin-base>
