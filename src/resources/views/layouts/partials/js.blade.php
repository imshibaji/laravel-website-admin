<!-- jQuery  -->
<script src="{{ URL::asset( $assetLink . '/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/jquery-ui.min.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/metismenu.min.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/waves.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/feather.min.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/jquery.slimscroll.min.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/js.cookie.min.js') }}"></script>
<script src="{{ URL::asset( $assetLink . '/js/js.osColorMode.js') }}"></script>
@yield('js_plugins')
<!-- App js -->
<script src="{{ URL::asset( $assetLink . '/js/app.js') }}"></script>
<script>
    function darkCssLink(){
        $('#css-link').attr("href","{{ URL::asset( $assetLink . '/css/bootstrap-dark.min.css')}}");
        $('#css-theme').attr("href","{{ URL::asset( $assetLink . '/css/app-dark.min.css')}}");
    }
    function lightCssLink(){
        $('#css-link').attr("href","{{ URL::asset( $assetLink . '/css/bootstrap.min.css')}}");
        $('#css-theme').attr("href","{{ URL::asset( $assetLink . '/css/app-material.min.css')}}");
    }
</script>
