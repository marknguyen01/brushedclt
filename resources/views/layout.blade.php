<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ setting('site.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"> -->
    <!-- <link rel="apple-touch-icon" href="img/icon.png"> -->
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
    @yield('js_links')
</body>
</html>
