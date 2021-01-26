<div class="col-{{$col ?? 12}}">
    <div class="form-group">
        <label class="col-12 pl-0">{{Str::ucfirst($name)}}</label>
        <div class="btn-group btn-group-toggle" @if($disabled) disabled @endif data-toggle="buttons">
            <label class="btn btn-outline-secondary @if($checked=='on') active @endif">
                <input type="radio" name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" @if($checked==$on) checked @endif value="{{$on}}"> {{Str::ucfirst($on)}}
            </label>
            <label class="btn btn-outline-danger @if($checked=='off') active @endif">
                <input type="radio" name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" @if($checked==$off) checked @endif value="{{$off}}"> {{Str::ucfirst($off)}}
            </label>
        </div>
    </div>

    {{--<span class="custom-control custom-switch switch-{{$color}}">
        <a class="btn" href="{{ $url ?? '' }}">
            <input type="checkbox" name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" @if($disabled) disabled @endif class="custom-control-input" id="customSwitch{{Str::ucfirst($name)}}" @if($checked) checked @endif>
            <label class="custom-control-label" for="customSwitch{{Str::ucfirst($name)}}">{{Str::ucfirst($name)}}</label>
        </a>
    </span>--}}
</div>
