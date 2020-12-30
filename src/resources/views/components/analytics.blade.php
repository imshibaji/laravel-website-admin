<div class="col-lg-4">
    <div class="card">
        <div class="card-body">
            <div class="icon-contain">
                <div class="row">
                    <div class="col-8 align-self-center">
                        <h5 class="">{{$title}}</h5>
                        <p class="text-muted mb-0">{{$description}} <i class="mdi mdi-menu-{{$updown}} text-{{ ($updown == 'up')? 'success' : 'danger' }} font-16"></i></p>
                    </div><!--end col-->
                    <div class="col-4">
                        <span class="{{$chartclass}}" data-peity="{{$dataPeity}}" data-width="100%" data-height="60">{{ $points }}</span>
                    </div><!--end col-->
                </div>  <!--end row-->
            </div><!--end icon-contain-->
        </div><!--end card-body-->
    </div><!--end card-->
</div><!--end col-->

@once
@section('js_plugins')
@parent
<script src="{{ URL::asset( $assetLink .'/plugins/peity-chart/jquery.peity.min.js') }}"></script>
@endsection
@endonce


@once
@section('scripts')
@parent
<script>
// bar
$('.peity-bar').each(function () {
  $(this).peity("bar", $(this).data());
});

 //donut
 $('.peity-donut').each(function () {
  $(this).peity("donut", $(this).data());
});

// line
$('.peity-line').each(function () {
  $(this).peity("line", $(this).data());
});
</script>
@endsection
@endonce
