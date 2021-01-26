<div class="form-group col-{{ $col ?? 12 }}">

    <label>{{$name}}@if($required)<span class="text-danger">*</span>@endif</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <label class="input-group-text"><i class="{{$icon ?? 'far fa-edit' }}"></i></label>
        </div>
        <select name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" @if($required) required @endif @if($readonly) readonly @endif  @if($disabled) disabled @endif class="custom-select" @if($multiple) multiple="multiple" @endif>
            @if($option)
                {{$option}}
            @else
                <option>None</option>
            @endif
        </select>
        @if($addBtn)
        <div class="input-group-append">
            {{$addBtn}}
        </div>
        @endIf
    </div>
</div>
