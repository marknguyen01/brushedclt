<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Expires" content="0" />
    <title>{{ setting('site.title') }}@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="US-NC">
    <meta name="geo.placename" content="Charlotte">
    <meta name="geo.position" content="35.220513;-80.82805">
    <meta name="ICBM" content="35.220513, -80.82805">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="apple-touch-icon" href="img/icon.png"> -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @yield('css_links')
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Wrapper -->
    <div id="preloader" class="text-center">
      <img class="img-fluid d-inline" src="{{ asset('images/logo.png') }}" alt="{{ setting('site.title') }} Logo">
    </div>


    <div id="wrapper" class="wrapper">
      <div id="app">
        @if(setting('site.alert') !== null && !empty(setting('site.alert')))
            <alert-component :alert-data="{{ json_encode(setting('site.alert')) }}"></alert-component>
        @endif
        @yield('header')
        <!-- Page Conttent -->
        @yield('content')
        <!--// Page Conttent -->
        <!-- Footer -->
        @yield('footer')
        <!--// Footer -->
      </div>
    </div>
    <!--// Wrapper -->

    <!-- Js Files -->
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    @yield('js_links')
</body>
</html>
