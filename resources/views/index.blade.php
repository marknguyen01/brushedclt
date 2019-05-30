@extends('layout')

@section('css_links')
<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/plugins.css') }}">
<!-- Style Css -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<!-- Custom Styles -->
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endsection

@section('header')
    @include('partials.header')
    <!-- Start Slider Area -->
    <div class="ht-mega-slider">
        <div class="ht-mega-slider-activation">
            <!-- Start Single Slide -->
            <div class="ht-slide slider-style-2 bg_image--1 d-flex align-items-center animation__style--1">
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
@endsection

@section('content')
    <!-- Page Conttent -->
    <main class="page-content">
        @include('about')
        @include('service')
        @include('team')
        @include('contact')
        @include('testimony')
    </main>
    <!--// Page Conttent -->
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('js_links')
    <script src="{{ asset('js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
@endsection
