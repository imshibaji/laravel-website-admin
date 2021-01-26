<!-- Button trigger modal -->
@php
    $adminID = $modalId ?? 'admin_'.Str::lower(Str::snake($btnname));
@endphp
@if($nobtn == false)
<button type="button" class="btn btn-{{$type}}" data-toggle="modal" data-target="#{{$adminID}}">
    {{$btnname}}
</button>
@endif

  <!-- Modal -->
<div class="modal fade" id="{{$adminID}}" tabindex="-1" aria-labelledby="{{$adminID}}Label" aria-hidden="true">
    <div class="modal-dialog modal-{{$size}}">
    @if($action)
    <form action="{{$action}}" method="{{$method}}" enctype="multipart/form-data">
        @csrf
    @endif
      <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="{{$adminID}}Label">{{$title}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          {{$slot}}
        </div>
        <div class="modal-footer">
            @if ($footer)
                {{$footer}}
            @else
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            @endif
        </div>
      </div>
      @if($action)</form>@endif
    </div>
  </div>
