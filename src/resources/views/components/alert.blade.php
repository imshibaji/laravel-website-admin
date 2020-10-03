<div class="alert alert-{{$type ?? 'info'}} alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
    </button>
    {{-- <strong>Oh snap!</strong> Change a few things up and try submitting again. --}}
    {!! $message ?? '<strong>Oh snap!</strong> Change a few things up and try submitting again.' !!}
</div>
