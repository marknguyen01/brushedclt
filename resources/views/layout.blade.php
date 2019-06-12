<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ setting('site.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="apple-touch-icon" href="img/icon.png"> -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css_links')
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">
        @yield('header')
        <!-- Page Conttent -->
        @yield('content')
        <!--// Page Conttent -->
        <!-- Footer -->
        @yield('footer')
        <!--// Footer -->
    </div>
    <!--// Wrapper -->

    <!-- Js Files -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    @yield('js_links')
</body>
</html>
