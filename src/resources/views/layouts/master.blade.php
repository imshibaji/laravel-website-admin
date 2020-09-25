<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Shibaji Debnath" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset( $assetLink . '/images/favicon.ico') }}">

        @yield('headers')

        @php
            $color_scheme = isset($_COOKIE["color_scheme"]) ? $_COOKIE["color_scheme"] : false;
            // if ($color_scheme === false) $color_scheme = 'light';
            // echo $color_scheme;
        @endphp

        <!-- App css -->
        @if($color_scheme == 'light')
            <link id="css-link" href="{{ URL::asset( $assetLink . '/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        @else
            <link id="css-link" href="{{ URL::asset( $assetLink . '/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" />
        @endIf
        <link href="{{ URL::asset( $assetLink . '/css/jquery-ui.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset( $assetLink . '/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset( $assetLink . '/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
        @if($color_scheme == 'light')
            <link href="{{ URL::asset( $assetLink . '/css/app-material.min.css')}}" rel="stylesheet" type="text/css" />
        @else
            <link href="{{ URL::asset( $assetLink . '/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" />
        @endIf
        <style>.leftbar-tab-menu .main-icon-menu {background-color: #0f4069;}</style>

        @yield('headerStyle')
    </head>

    <body>

         <!-- leftbar -->
        {{-- @include('admin::layouts/partials/sidebar/leftbar') --}}
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

        <!-- Plugins -->
        <script src="{{ URL::asset( $assetLink . '/plugins/apexcharts/apexcharts.min.js') }}"></script>

        <!-- App js -->
        <script src="{{ URL::asset( $assetLink . '/js/app.js') }}"></script>

        <!-- footerScript -->
        @yield('footerScript')
    </body>
</html>
