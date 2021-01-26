<div class="form-group col-{{ $col ?? 12 }}">
    <label>{{$name}}@if($required)<span class="text-danger">*</span>@endif</label>
    <select name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" @if($required) required @endif @if($readonly) readonly @endif  @if($disabled) disabled @endif class="select2 mb-3 select2-multiple" style="width: 100%" @if($multiple) multiple="multiple" @endif data-placeholder="Choose">
        @if($option)
            {{$option}}
        @else
            <option>None</option>
        @endif
    </select>
</div>

@section('headers')
@parent
<link href="{{ URL::asset($assetLink .'/plugins/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('js_plugins')
@parent
<script src="{{ URL::asset($assetLink .'/plugins/select2/select2.min.js')}}"></script>
<script>
$(function(){
    $(".select2").select2({
        width: '100%',
    });
});
</script>
@endsection
