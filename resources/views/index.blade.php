@extends('layout')

@section('css_links')
@endsection

@section('title')
 | Home
@endsection

@section('header')
    <header class="header">
      <div class="video-container">
        <video autoplay="autoplay" loop="loop" muted id="hero-video">
          <source src="{{ asset('videos/hero-video.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
      </div>
        @include('partials.navbar')
        @include('partials.hero')
    </header>
@endsection

@section('content')
    <main class="page-content">
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
