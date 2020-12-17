<!-- App css -->
@if($color_scheme == 'light')
<link id="css-link" href="{{ URL::asset( $assetLink . '/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@else
<link id="css-link" href="{{ URL::asset( $assetLink . '/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" />
@endIf
<link href="{{ URL::asset( $assetLink . '/css/jquery-ui.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset( $assetLink . '/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset( $assetLink . '/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
<!-- DataTables -->
<link href="{{ URL::asset( $assetLink . '/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset( $assetLink . '/plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset( $assetLink . '/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset( $assetLink . '/plugins/footable/css/footable.bootstrap.css')}}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset( $assetLink . '/css/formio.full.min.css')}}" rel="stylesheet">
@if($color_scheme == 'light')
<link id="css-theme" href="{{ URL::asset( $assetLink . '/css/app.min.css')}}" rel="stylesheet" type="text/css" />
{{-- <link id="css-theme" href="{{ URL::asset( $assetLink . '/css/app-material.min.css')}}" rel="stylesheet" type="text/css" /> --}}
@else
<link id="css-theme" href="{{ URL::asset( $assetLink . '/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" />
<style>.leftbar-tab-menu .main-icon-menu {background-color: #0f4069;}</style>
@endIf
@yield('css_plugins')
