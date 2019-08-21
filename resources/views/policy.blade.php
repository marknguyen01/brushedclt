@extends('layout')

@section('css_links')
    <link rel="stylesheet" href="{{ asset('css/policy.css') }}">
@endsection



@section('title')
 | Child Safety Policy
@endsection

@section('header')
    <div class="text-center mb-0 mb-lg-5">
      <a href="/">
          <img class="img-fluid d-inline slider__logo" src="{{ asset('img/logo.png') }}" alt="{{ setting('site.title') }} Logo">
      </a>
    </div>
    @include('partials.navbar')
@endsection

@section('content')
<div class="policy mb-5">
    <h1 class="font-size--48 font-family--h1 text-color--pink text-center my-5">Child Safety Policy</h1>
    <div class="container">
        <div class="policy__content font-size--20">
            {!! setting('site.child_policy') !!}
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
