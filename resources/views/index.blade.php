@extends('layout')

@section('css_links')
@endsection

@section('header')
    @include('partials.header')
    <!-- Start Slider Area -->
    <div class="slider">
        <!-- Start Single Slide -->
        <div class="slider__child d-flex align-items-center" style="background-image:url('{{ asset('img/bg/bg-image-4.jpg')}}')">
            <div class="slider__content text-center w-100">
                <h2>Blowouts & Nails & Brows</h2>
                <p>{{ setting('site.description') }}</p>
                <div class="slider__button-group mt-5">
                    <a class="button button--purple" href="#">Book Now</a>
                    <a class="button button--regular" href="/menu">View Menu</a>
                </div>
            </div>
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
  <script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
@endsection
