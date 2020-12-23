<li class="hide-phone app-search">
    <form action="{{ config('admin.prefix', 'admin') .$action}}" method="{{$method}}" role="search" class="">
        <input type="text" name="q" id="AllCompo" placeholder="Search..." class="form-control">
        <button class="light" type="submit"><i class="fas fa-search"></i></button>
    </form>
</li>


@section('scripts')
@parent
<script>
var data = {!! json_encode($datas ?? []) !!};
(function($){
function initAutoComplate() {
    $(document).ready(function () {
        BindControls();
    });

    function BindControls() {
        var Countries =  data;

        $('#AllCompo').autocomplete({
            source: Countries,
            minLength: 0,
            scroll: true
        }).focus(function () {
            $(this).autocomplete("search", "");
        });
    }
}
initAutoComplate();
})($);
</script>
@endsection

