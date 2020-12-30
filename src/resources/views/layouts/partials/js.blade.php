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
{{-- <script src="{{ URL::asset( $assetLink . '/plugins/apexcharts/apexcharts.min.js') }}"></script> --}}
{{-- <script src="{{ URL::asset( $assetLink . '/plugins/formio/formio.full.min.js') }}"></script> --}}
@yield('js_plugins')
<!-- footerScript -->
@livewireScripts
@yield('footerScript')
@yield('scripts')
