@extends('layout')

@section('css_links')
@endsection

@section('title')
 | Home
@endsection

@section('header')
    <header class="header">
        @include('partials.navbar')
        @include('partials.slider')
    </header>
@endsection

@section('content')
    <main class="page-content" id="app">
        @include('service')
        @include('about')
        @include('review')
        @include('team')
        @include('contact')
    </main>
@endsection

@section('footer')
    @include('partials.footer', ['positioned' => true])
@endsection

@section('js_links')
  <script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
@endsection
