<div class="form-group col-{{$col ?? '12'}}">
    <label>{{ Str::ucfirst($name)}}</label>
    <textarea id="editor-{{Str::lower($name)}}" class="form-control" @if($required) required @endif @if($readonly) readonly @endif  @if($disabled) disabled @endif name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" placeholder="{{$placeholder ?? ''}}">{{$value ?? ''}}</textarea>
</div>

@once
@section('js_plugins')
@parent
<script src="{{ URL::asset( $assetLink . '/plugins/tinymce/tinymce.min.js')}}"></script>
@endsection

@section('scripts')
@parent
<script>
$(document).ready(function () {
  var elname = '#editor-{{Str::lower($name)}}';
  if($(elname).length > 0){
      tinymce.init({
          selector: "textarea"+elname,
          theme: "modern",
          height:300,
          plugins: [
              "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
              "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
              "save table contextmenu directionality emoticons template paste textcolor"
          ],
          toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
          style_formats: [
              {title: 'Bold text', inline: 'b'},
              {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
              {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
              {title: 'Example 1', inline: 'span', classes: 'example1'},
              {title: 'Example 2', inline: 'span', classes: 'example2'},
              {title: 'Table styles'},
              {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
          ]
      });
  }
});
</script>
@endsection
@endonce
