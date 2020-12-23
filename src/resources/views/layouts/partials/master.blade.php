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
    <link rel="shortcut icon" href="{{ URL::asset( $assetLink . '/images/favicon.ico') }}">

    @yield('headers')

      <!-- App css -->
    <link href="{{ URL::asset( $assetLink . '/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset( $assetLink . '/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ URL::asset( $assetLink . '/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset( $assetLink . '/css/metisMenu.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset( $assetLink . '/css/app-material.min.css') }}" rel="stylesheet" type="text/css" />

    @yield('headerStyle')
</head>
<body>
  <div class="page-wrapper">

      <!-- Page Content-->
      <div class="page-content-tab">
          @yield('content')
      </div>

  </div>
  <!-- jQuery  -->
  <script src="{{ URL::asset( $assetLink . '/js/jquery.min.js') }}"></script>
  <script src="{{ URL::asset( $assetLink . '/js/jquery-ui.min.js') }}"></script>
  <script src="{{ URL::asset( $assetLink . '/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ URL::asset( $assetLink . '/js/metismenu.min.js') }}"></script>
  <script src="{{ URL::asset( $assetLink . '/js/waves.js') }}"></script>
  <script src="{{ URL::asset( $assetLink . '/js/feather.min.js') }}"></script>
  <script src="{{ URL::asset( $assetLink . '/js/jquery.slimscroll.min.js') }}"></script>
  <script src="{{ URL::asset( $assetLink . '/plugins/apexcharts/apexcharts.min.js') }}"></script>

  @yield('footerJs')

  <!-- App js -->
  <script src="{{ URL::asset( $assetLink . '/js/app.js') }}"></script>

  @yield('footerScript')

</body>
</html>
