<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @yield('css_links')
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Wrapper -->
    <div id="preloader" class="text-center">
      <img class="img-fluid d-inline" src="{{ asset('img/logo.png') }}" alt="{{ setting('site.title') }} Logo">
    </div>
    {{-- <!-- Button trigger modal -->
    <div class="btn-deal" data-toggle="modal" data-target="#dealModal">
        <ion-icon name="flame"></ion-icon> BOGO 50%
    </div>

    <!-- Modal -->
    <div class="modal fade" id="dealModal" tabindex="-1" role="dialog" aria-labelledby="dealModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4 class="text-center">For a limited time, get your second blowout service for</h4>
                <h1 class="text-center font-weight-bold">50% OFF</h1>
                <h4 class="text-center">Schedule your appointment today!</h4>
            </div>
            <div class="modal-footer">
                  <a class="btn btn-secondary w-100 " href="https://phorest.com/book/salons/brushed#/service-category?id=wzn5341MyeNN_BH2Pl3m1A">ONLINE BOOKING</a>
                  <a class="btn btn-secondary w-100 " href="tel:{{ setting('contact.phone') }}">PHONE BOOKING</a>
            </div>
        </div>
        </div>
    </div> --}}
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
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    @yield('js_links')
</body>
</html>
