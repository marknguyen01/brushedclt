@extends('layout')

@section('css_links')
@endsection

@section('header')
    <header class="header">
        @include('partials.navbar')
        @include('partials.slider')
    </header>
@endsection

@section('content')
    <!-- Page Conttent -->
    <main class="page-content">
        @include('service')
        @include('about')
        @include('team')
        @include('review')
        @include('contact')
    </main>
    <!--// Page Conttent -->
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('js_links')
  <script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
@endsection
