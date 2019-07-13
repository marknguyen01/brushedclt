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
    <main class="page-content bg-color--purple">
        @include('service')
        @include('about')
        @include('team')
        @include('review')
        @include('contact')
    </main>
@endsection

@section('footer')
    @include('partials.footer', ['positioned' => true])
@endsection

@section('js_links')
  <script type="text/javascript" src="{{ asset('js/parallax.min.js') }}"></script>
@endsection
