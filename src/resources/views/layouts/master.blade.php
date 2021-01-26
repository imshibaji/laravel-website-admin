<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title', config('admin.title'))</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Shibaji Debnath" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset( $assetLink . '/images/favicon.ico') }}">
        @yield('headers')
        @php
            $color_scheme = isset($_COOKIE["color_scheme"]) ? $_COOKIE["color_scheme"] : false;
            // if ($color_scheme === false) $color_scheme = 'light';
            // echo $color_scheme;
        @endphp
        @include('admin::layouts/partials/css')
    </head>
    <body>
         <!-- leftbar -->
        {{-- @include('admin::layouts/vertical-2-partials/sidebar') --}}
        @include('admin::layouts/partials/sidebar/'. config('admin.sidebar', 'leftbar'))

         <!-- toptbar -->
        @include('admin::layouts/partials/topbar')

        <div class="page-wrapper">
            <!-- Page Content-->
            <div class="page-content-tab">
             <!-- content -->
             @yield('content')
             <!-- extra Modal -->
             @include('admin::layouts/partials/extra-modal')
              <!-- Footer -->
              @include('admin::layouts/partials/footer')

            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        @include('admin::layouts/partials/js')
<!-- App js -->
<script src="{{ URL::asset( $assetLink . '/js/app.js') }}"></script>
<script>
function darkCssLink(){
    $('#css-link').attr("href","{{ URL::asset( $assetLink . '/css/bootstrap-dark.min.css')}}");
    $('#css-theme').attr("href","{{ URL::asset( $assetLink . '/css/app-dark.min.css')}}");
}
function lightCssLink(){
    $('#css-link').attr("href","{{ URL::asset( $assetLink . '/css/bootstrap.min.css')}}");
    // $('#css-theme').attr("href","{{ URL::asset( $assetLink . '/css/app-material.min.css')}}");
    $('#css-theme').attr("href","{{ URL::asset( $assetLink . '/css/app.min.css')}}");
}
</script>
    </body>
</html>
