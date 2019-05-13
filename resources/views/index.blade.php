<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ setting('site.title') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/icon.png">

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
        <header class="header header-1 header--static beauty-header beauty-theme-color clearfix">
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

            <!-- Start Welcome Area -->
            <div class="beauty-welcome section-ptb-120 bg_color--2">
                <div class="container">
                    <div class="row align-items-center">

                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="thumb">
                                <img src="img/beauty/others/welcome.png" alt="welcome">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12 col-12">
                            <div class="beauty-welcome-inner">
                                <div class="content">
                                    <span>Welcome to Beauty Spa</span>
                                    <h2>About Our Beauty.</h2>

                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing sed do eiusmod tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullam laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit</p>

                                    <a class="buty-btn" href="#">Appointment Now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Welcome Area -->

            <!-- Start Service Style-->
            <div class="section-service section-ptb-120 bg_color--48">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title--19 text-center">
                                <span>We take for you</span>
                                <h2>Best Services</h2>
                                <p>Lorem ipsum dolor sit amet consectetu adipisicin sed do eiusm tempor incidid ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30">
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="service text-center service-2 padding-none beauty-service">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="img/beauty/service/service-1.jpg" alt="service img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4>Quick Fix Makeup</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                    <a class="readmore_btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="service text-center service-2 padding-none beauty-service">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="img/beauty/service/service-2.jpg" alt="service img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4>L'oreal Color</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                    <a class="readmore_btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->
                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="service text-center service-2 padding-none beauty-service">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="img/beauty/service/service-3.jpg" alt="service img">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4>Nail Treatment</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                    <a class="readmore_btn" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->

                    </div>
                </div>
            </div>
            <!-- End Service Style-->

            <!-- Start Service Style-->
            <div class="section-awesome section-ptb-120 bg_color--2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title--19 text-center">
                                <span>We are awesome</span>
                                <h2>Why We Are Best </h2>
                                <p>Lorem ipsum dolor sit amet consectetu adipisicin sed do eiusm tempor incidid ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--30 align-items-center">

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">

                            <!-- Start Single Service -->
                            <div class="bty-awesome">
                                <div class="content">
                                    <h4>We are Professional</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                </div>
                                <div class="thumb">
                                    <img src="img/beauty/others/shape-1.png" alt="shape">
                                </div>
                            </div>
                            <!-- End Single Service -->

                            <!-- Start Single Service -->
                            <div class="bty-awesome">
                                <div class="content">
                                    <h4>We are Professional</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                </div>
                                <div class="thumb">
                                    <img src="img/beauty/others/shape-2.png" alt="shape">
                                </div>
                            </div>
                            <!-- End Single Service -->

                            <!-- Start Single Service -->
                            <div class="bty-awesome">
                                <div class="content">
                                    <h4>We are Professional</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                </div>
                                <div class="thumb">
                                    <img src="img/beauty/others/shape-3.png" alt="shape">
                                </div>
                            </div>
                            <!-- End Single Service -->

                        </div>

                        <!-- Start Single Service -->
                        <div class="col-lg-4 col-md-6 mt--30 d-none d-md-block">
                            <div class="bty-awesome text-center">
                                <div class="feature-thumb">
                                    <img src="img/beauty/others/best.png" alt="shape">
                                </div>
                            </div>
                        </div>
                        <!-- End Single Service -->

                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--30">

                            <!-- Start Single Service -->
                            <div class="bty-awesome">
                                <div class="thumb">
                                    <img src="img/beauty/others/shape-4.png" alt="shape">
                                </div>
                                <div class="content text-left">
                                    <h4>We are Professional</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                </div>
                            </div>
                            <!-- End Single Service -->

                            <!-- Start Single Service -->
                            <div class="bty-awesome">
                                <div class="thumb">
                                    <img src="img/beauty/others/shape-5.png" alt="shape">
                                </div>
                                <div class="content text-left">
                                    <h4>We are Professional</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                </div>
                            </div>
                            <!-- End Single Service -->

                            <!-- Start Single Service -->
                            <div class="bty-awesome">
                                <div class="thumb">
                                    <img src="img/beauty/others/shape-6.png" alt="shape">
                                </div>
                                <div class="content text-left">
                                    <h4>We are Professional</h4>
                                    <p>Lorem ipsum dolor sit amet ectetur adipelitl sed do eiusmod tempor incidid</p>
                                </div>
                            </div>
                            <!-- End Single Service -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- End Service Style-->

            <!-- Start Welcome Area -->
            <div class="beauty-welcome section-ptb-120 bg_image--99">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="cr-welcome-wrapper">
                                <div class="section-title--19 text-left">
                                <span>Who We Are</span>
                                <h2>Our History</h2>
                            </div>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, cons adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </div>
                                <div class="beauty-counter d-flex">
                                    <div class="funfact counter-style--2">
                                        <div class="content">
                                            <span class="count">15</span>
                                            <h2 class="fact-title">Years of Exprience</h2>
                                        </div>
                                    </div>
                                    <div class="funfact counter-style--2">
                                        <div class="content">
                                            <span class="count">20</span>
                                            <h2 class="fact-title">Happy Customers</h2>
                                        </div>
                                    </div>
                                    <div class="funfact counter-style--2">
                                        <div class="content">
                                            <span class="count">60</span>
                                            <h2 class="fact-title">Satisfaction Guranteed</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Welcome Area -->

            <!-- Start Team Style -->
            <div class="section-team section-ptb-120 bg_color--2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title--19 text-center">
                                <span>Enjoy bodymassage</span>
                                <h2>Expert Beauticians</h2>
                                <p>Lorem ipsum dolor sit amet consectetu adipisicin sed do eiusm tempor incidid ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start Team Area -->
                    <div class="row mt--30">

                        <!-- Start Single Team -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="team team-6 beauty-team">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="img/beauty/team/team-1.jpg" alt="team img">
                                    </a>
                                    <div class="team-hover-action">
                                        <div class="hover-action">
                                            <h4><a href="#">Laura Burns</a></h4>
                                            <span>Director</span>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod</p>
                                            <ul class="social-network social-net-2">
                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->

                        <!-- Start Single Team -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="team team-6 beauty-team">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="img/beauty/team/team-2.jpg" alt="team img">
                                    </a>
                                    <div class="team-hover-action">
                                        <div class="hover-action">
                                            <h4><a href="#">Laura Burns</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod</p>
                                            <span>Director</span>
                                            <ul class="social-network social-net-2">
                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->

                        <!-- Start Single Team -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="team team-6 beauty-team">
                                <div class="thumb">
                                    <a href="#">
                                        <img src="img/beauty/team/team-3.jpg" alt="team img">
                                    </a>
                                    <div class="team-hover-action">
                                        <div class="hover-action">
                                            <h4><a href="#">Laura Burns</a></h4>
                                            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit, sed do eiusmod</p>
                                            <span>Director</span>
                                            <ul class="social-network social-net-2">
                                                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="vimeo" href="#"><i class="fa fa-vimeo"></i></a></li>
                                                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Team -->

                    </div>
                    <!-- End Team Area -->
                </div>
            </div>
            <!-- End Team Style -->


            <!-- Start Testimonial Style -->
            <div class="section-testimonial section-ptb-120 bg_color--2 bg_image--100">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="testimonial-style-5 testimonial-slider-5 poss--relative">

                                <!-- Start Testimonial Nav -->
                                <div class="testimonal-nav5">

                                    <div class="testimonal-img">
                                        <img src="img/testimonial/clint-9.png" alt="testimonal image">
                                    </div>

                                    <div class="testimonal-img">
                                        <img src="img/testimonial/clint-10.png" alt="testimonal image">
                                    </div>

                                    <div class="testimonal-img">
                                        <img src="img/testimonial/clint-11.png" alt="testimonal image">
                                    </div>

                                    <div class="testimonal-img">
                                        <img src="img/testimonial/clint-12.png" alt="testimonal image">
                                    </div>

                                    <div class="testimonal-img">
                                        <img src="img/testimonial/clint-11.png" alt="testimonal image">
                                    </div>

                                    <div class="testimonal-img">
                                        <img src="img/testimonial/clint-12.png" alt="testimonal image">
                                    </div>



                                </div>
                                <!-- End Testimonial Nav -->

                                <!-- Start Testimonial For -->
                                <div class="testimonial-for5">

                                    <div class="testimonial-desc">
                                        <div class="client">
                                            <h6>Jordan Lewis</h6>
                                            <span>Designer</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco consectetur laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                    <div class="testimonial-desc">
                                        <div class="client">
                                            <h6>Carolina Montoya</h6>
                                            <span>Designer</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco consectetur laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                    <div class="testimonial-desc">
                                        <div class="client">
                                            <h6>Michelle Mitchell</h6>
                                            <span>Designer</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco consectetur laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                    <div class="testimonial-desc">
                                        <div class="client">
                                            <h6>Klaus Gruber</h6>
                                            <span>Designer</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco consectetur laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                    <div class="testimonial-desc">
                                        <div class="client">
                                            <h6>Klaus Gruber</h6>
                                            <span>Designer</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco consectetur laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                    <div class="testimonial-desc">
                                        <div class="client">
                                            <h6>Klaus Gruber</h6>
                                            <span>Designer</span>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco consectetur laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div>

                                </div>
                                <!-- End Testimonial For -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Testimonial Style -->


            <!-- Start Team Style -->
            <div class="section-pricing-table section-ptb-120 bg_color--2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title--19 text-center">
                                <span>Your Best Solution</span>
                                <h2>Pricing Plan</h2>
                                <p>Lorem ipsum dolor sit amet consectetu adipisicin sed do eiusm tempor incidid ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Start Team Area -->
                    <div class="row align-items-center mt--30">

                        <!-- Start Single Pricing Table -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="pricing-panel pricing-panel-7 beauty-pricing-table">
                                <div class="pricing-heading">
                                    <div class="price" style="background-image:url(img/pricing/pricebg2.png);">
                                        <h4><sub>$</sub>35<span class="separator">/</span> <span>Day</span></h4>
                                    </div>
                                    <div class="title">
                                        <h2>Basic</h2>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>Feugiat risus sitamet rutrum </li>
                                        <li>Lorem ipsul dolor sit amet.</li>
                                        <li>Praesent finibus.</li>
                                        <li>Nam feugiat risus sitamet.</li>
                                        <li>Order Now</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a class="price_btn" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Pricing Table -->

                        <!-- Start Single Pricing Table -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="pricing-panel pricing-panel-7 active beauty-pricing-table">
                                <div class="pricing-heading">
                                    <div class="price" style="background-image:url(img/beauty/others/pricing.png);">
                                        <h4><sub>$</sub>80<span class="separator">/</span> <span>Week</span></h4>
                                    </div>
                                    <div class="title">
                                        <h2>Standard</h2>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>Feugiat risus sitamet rutrum </li>
                                        <li>Lorem ipsul dolor sit amet.</li>
                                        <li>Praesent finibus.</li>
                                        <li>Nam feugiat risus sitamet.</li>
                                        <li>Order Now</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a class="price_btn" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Pricing Table -->

                        <!-- Start Single Pricing Table -->
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                            <div class="pricing-panel pricing-panel-7 beauty-pricing-table">
                                <div class="pricing-heading">
                                    <div class="price" style="background-image:url(img/pricing/pricebg2.png);">
                                        <h4><sub>$</sub>130<span class="separator">/</span> <span>Day</span></h4>
                                    </div>
                                    <div class="title">
                                        <h2>Complete</h2>
                                    </div>
                                </div>
                                <div class="pricing-body">
                                    <ul>
                                        <li>Feugiat risus sitamet rutrum </li>
                                        <li>Lorem ipsul dolor sit amet.</li>
                                        <li>Praesent finibus.</li>
                                        <li>Nam feugiat risus sitamet.</li>
                                        <li>Order Now</li>
                                    </ul>
                                </div>
                                <div class="pricing-footer">
                                    <a class="price_btn" href="#">Order Now</a>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Pricing Table -->


                    </div>
                    <!-- End Team Area -->
                </div>
            </div>
            <!-- End Team Style -->

            <!-- Start Contact Form Style -->
            <div class="section-contact section-ptb-120 bg_image--101">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="section-title--19 text-left">
                                <span>Your Best Solution</span>
                                <h2>Make a Appointment</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="form_wrapper form-style-1 beauty-salon">
                                <!-- Start Form -->
                                <form action="#">
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <input type="text" placeholder="Your Name*">
                                        </div>

                                        <div class="col-lg-6">
                                            <input type="email" placeholder="Your Mail*">
                                        </div>

                                        <div class="col-lg-12">
                                            <textarea name="message" placeholder="Massege*"></textarea>
                                        </div>

                                        <div class="col-lg-12">
                                            <input type="submit" value="SEND MESSAGE">
                                        </div>

                                    </div>
                                </form>
                                <!-- End Form -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Form Style -->

            <!-- Start Post Carousel Style-->
            <div class="section-post-carousel section-pt-120 pb--90 bg_color--2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-title--19 text-center">
                                <span>Our News</span>
                                <h2>Latest Blog</h2>
                                <p>Lorem ipsum dolor sit amet consectetu adipisicin sed do eiusm tempor incidid ut labore et dolore magna aliqua.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt--50">
                        <div class="col-lg-12">
                            <div class="post-carousel-wrapper post-carousel-active-5 beauty-post-wrapper">

                                <!-- Start Single Post -->
                                <div class="post-carousel post-carousel-5 beauty-post">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/beauty/post/post-1.jpg" alt="elementor">
                                        </a>
                                    </div>
                                    <div class="ptc-content">
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#">Admin Name</a></li>
                                                <li>10 March 2020</li>
                                            </ul>
                                            <h2><a href="#">Spirit of Adventure Rises.</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eius
                                                tempor incididu ut labore et dolore</p>
                                            <div class="post-btn">
                                                <a class="readmore-btn" href="#">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->

                                <!-- Start Single Post -->
                                <div class="post-carousel post-carousel-5 beauty-post">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/beauty/post/post-2.jpg" alt="elementor">
                                        </a>
                                    </div>
                                    <div class="ptc-content">
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#">Admin Name</a></li>
                                                <li>10 March 2020</li>
                                            </ul>
                                            <h2><a href="#">Spirit of Adventure Rises.</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eius
                                                tempor incididu ut labore et dolore</p>
                                            <div class="post-btn">
                                                <a class="readmore-btn" href="#">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->

                                <!-- Start Single Post -->
                                <div class="post-carousel post-carousel-5 beauty-post">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/beauty/post/post-3.jpg" alt="elementor">
                                        </a>
                                    </div>
                                    <div class="ptc-content">
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#">Admin Name</a></li>
                                                <li>10 March 2020</li>
                                            </ul>
                                            <h2><a href="#">Spirit of Adventure Rises.</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eius
                                                tempor incididu ut labore et dolore</p>
                                            <div class="post-btn">
                                                <a class="readmore-btn" href="#">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->

                                <!-- Start Single Post -->
                                <div class="post-carousel post-carousel-5 beauty-post">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="img/beauty/post/post-1.jpg" alt="elementor">
                                        </a>
                                    </div>
                                    <div class="ptc-content">
                                        <div class="content">
                                            <ul class="meta">
                                                <li><a href="#">Admin Name</a></li>
                                                <li>10 March 2020</li>
                                            </ul>
                                            <h2><a href="#">Spirit of Adventure Rises.</a></h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed do eius
                                                tempor incididu ut labore et dolore</p>
                                            <div class="post-btn">
                                                <a class="readmore-btn" href="#">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Post -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Post Carousel  Style-->

        </main>
        <!--// Page Conttent -->

        <!-- Footer -->
        <footer class="footer">
            <div class="copyright bg_color--40 copyright-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="copyright-left content text-center">
                                <p><a href="marknguyen.org">Design by Mark Nguyen</a></p>
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
