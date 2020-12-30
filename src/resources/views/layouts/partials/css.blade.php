<!-- App css -->
@if($color_scheme == 'light')
<link id="css-link" href="{{ URL::asset( $assetLink . '/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@else
<link id="css-link" href="{{ URL::asset( $assetLink . '/css/bootstrap-dark.min.css')}}" rel="stylesheet" type="text/css" />
@endIf
<link href="{{ URL::asset( $assetLink . '/css/jquery-ui.min.css')}}" rel="stylesheet">
<link href="{{ URL::asset( $assetLink . '/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset( $assetLink . '/css/metisMenu.min.css')}}" rel="stylesheet" type="text/css" />
@yield('css_plugins')
@if($color_scheme == 'light')
{{-- <link id="css-theme" href="{{ URL::asset( $assetLink . '/css/app-material.min.css')}}" rel="stylesheet" type="text/css" /> --}}
<link id="css-theme" href="{{ URL::asset( $assetLink . '/css/app.min.css')}}" rel="stylesheet" type="text/css" />
@else
<link id="css-theme" href="{{ URL::asset( $assetLink . '/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" />
<style>.leftbar-tab-menu .main-icon-menu {background-color: #0f4069;}</style>
@endIf
@livewireStyles
@yield('headerStyle')
@yield('styles')
