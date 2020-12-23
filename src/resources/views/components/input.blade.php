<div class="form-group col-{{$col ?? '12'}}">
    <label for="type">{{ Str::ucfirst($name)}}</label>
    <input type="{{$type ?? 'text'}}" class="form-control" @if($readonly) readonly @endif  @if($disabled) disabled @endif name="{{ Str::lower(Str::replaceArray(' ', '_', $fname ?? $name)) }}" id="input{{uuid()}}" placeholder="{{$placeholder ?? ''}}" value="{{$value ?? ''}}">
</div>
