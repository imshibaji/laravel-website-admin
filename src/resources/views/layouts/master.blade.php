<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('title', config('admin.title'))</title>
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
        @include('admin::layouts/partials/css')
        <!-- Liveware -->
        @livewireStyles
        @yield('headerStyle')
        @yield('styles')
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

        @include('admin::layouts/partials/js')

        <!-- Liveware -->
        @livewireScripts

        <!-- footerScript -->
        @yield('footerScript')
        @yield('scripts')
    </body>
</html>
