<div class="form-row col-{{ $col ?? 12 }}">
    <label style="height: 0px;">{{$name}}@if($required)<span class="text-danger">*</span>@endif</label>
    <div class="input-group">
        <select name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" @if($readonly) readonly @endif  @if($disabled) disabled @endif class="form-control" @if($multiple) multiple="multiple" @endif>
            @if($option)
                {{$option}}
            @else
                <option>None</option>
            @endif
        </select>
    </div>
</div>
