<div class="form-group col-{{$col ?? '12'}}">
    <label>{{ Str::ucfirst($name)}}</label>
    <textarea id="editor-{{Str::lower($name)}}" class="form-control" @if($required) required @endif @if($readonly) readonly @endif  @if($disabled) disabled @endif name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" placeholder="{{$placeholder ?? 'Input '.$name}}">{{ $value ?? ''}}</textarea>
</div>
