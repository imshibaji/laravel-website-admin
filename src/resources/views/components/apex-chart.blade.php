<div class="col-12">
    <div class="card">
        <div class="card-body">
            <h4 class="header-title mt-0 text-center">{{$title}}</h4>
            <div class="apex-chart"></div>
        </div>
    </div>
</div>
@once
@section('js_plugins')
@parent
<script src="{{ URL::asset( $assetLink . '/plugins/apexcharts/apexcharts.min.js') }}"></script>
@endsection
@endonce

@once
@section('scripts')
@parent
<script>
var options = @json($options);

var chart = new ApexCharts(document.querySelector(".apex-chart"), options);
chart.render();
</script>
@endsection
@endonce
