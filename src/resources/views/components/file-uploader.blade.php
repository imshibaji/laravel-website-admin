<div class="col-{{$col ?? 12}}">
    <h4 class="mt-0 header-title">{{Str::ucfirst($name) }}</h4>
    <input type="file" name="{{ Str::lower(str_replace(' ', '_', $fname)) }}" class="dropify" data-height="{{$height ?? 100}}"
    data-default-file="{{ $img ?? '' }}" />
</div>

@once
@section('css_plugins')
@parent
<link href="{{ URL::asset($assetLink . '/plugins/dropify/css/dropify.min.css')}}" rel="stylesheet">
@endsection

@section('js_plugins')
@parent
<script src="{{ URL::asset( $assetLink . '/plugins/dropify/js/dropify.min.js') }}"></script>
@endsection

@section('scripts')
@parent
<script>
$(function () {
  // Basic
  $('.dropify').dropify();

  // Translated
  $('.dropify-fr').dropify({
      messages: {
          default: 'Glissez-dÃ©posez un fichier ici ou cliquez',
          replace: 'Glissez-dÃ©posez un fichier ou cliquez pour remplacer',
          remove:  'Supprimer',
          error:   'DÃ©solÃ©, le fichier trop volumineux'
      }
  });

  // Used events
  var drEvent = $('#input-file-events').dropify();

  drEvent.on('dropify.beforeClear', function(event, element){
      return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
  });

  drEvent.on('dropify.afterClear', function(event, element){
      alert('File deleted');
  });

  drEvent.on('dropify.errors', function(event, element){
      console.log('Has Errors');
  });

  var drDestroy = $('#input-file-to-destroy').dropify();
  drDestroy = drDestroy.data('dropify')
  $('#toggleDropify').on('click', function(e){
      e.preventDefault();
      if (drDestroy.isDropified()) {
          drDestroy.destroy();
      } else {
          drDestroy.init();
      }
  })
});
</script>
@endsection
@endonce
