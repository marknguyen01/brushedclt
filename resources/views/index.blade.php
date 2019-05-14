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

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/plugins.css') }}">

    <!-- Style Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Wrapper -->
    <div id="wrapper" class="wrapper">

        <!-- Header -->
        <header class="header header-1 header--static beauty-header beauty-theme-color clearfi9999x">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="cuscol">
                        <div class="logo">
                            <a href="#">
                                <img style="max-height: 60px" src="/storage/{{ setting('site.logo') }}" alt="{{ setting('site.title') }} Logo">
                            </a>
                        </div>
                    </div>
                    <div class="cuscol d-flex align-items-center">
                        <nav class="mainmenu_nav with-mega-menu forall-element-page d-none d-lg-block">
                            <ul class="mainmenu">
                                <li>
                                    <a href="#">Home</a>
                                </li>
                                <li>
                                  <a href="#services">Services</a>
                                </li>
                                <li>
                                  <a href="#contact">Contact</a>
                                </li>
                            </ul>
                        </nav>
                        <div class="header-btn text-right purchase_btn">
                            <a href="/app">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--// Header -->

        <!-- Start Slider Area -->
        <div class="ht-mega-slider">
            <div class="ht-mega-slider-activation">
                <!-- Start Single Slide -->
                <div class="ht-slide slider-style-2 bg_image--98 d-flex align-items-center animation__style--1">
                    <div class="container">
                        <div class="row align-items-center text-left">
                            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                                <div class="hero-beauty-salon content text-left">
                                    <h2>Blowouts & Nails & Brows</h2>
                                    <p>{{ setting('site.description') }}</p>
                                    <div class="slide-btn">
                                        <a class="cln-btn" href="#">Schedule Appointments</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
        </div>
        <!-- End Slider Area -->

        <!-- Page Conttent -->
        <main class="page-content">
            @include('about')
            @include('service')
            @include('team')
            @include('contact')
            @include('testimony')
        </main>
        <!--// Page Conttent -->

        <!-- Footer -->
        <footer class="footer">
            <div class="copyright bg_color--40 copyright-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="copyright-left content text-center">
                                <p><a href="http://www.marknguyen.org">Design by Mark Nguyen</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--// Footer -->

    </div>
    <!--// Wrapper -->

    <!-- Js Files -->
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
