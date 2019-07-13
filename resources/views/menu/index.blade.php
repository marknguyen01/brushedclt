@extends('layout')

@section('css_links')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('header')
    <div class="text-center mb-0 mb-lg-5">
      <a href="/">
          <img class="img-fluid d-inline" src="{{ asset('img/logo.png') }}" alt="{{ setting('site.title') }} Logo">
      </a>
    </div>
    @include('partials.navbar')
@endsection

@section('content')
    <div class="menu mt-0 mt-lg-5">
        <div class="container">
            @if(isset($categories))
            <div class="input-group my-5">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Select a menu</label>
              </div>
              <select class="custom-select" id="inputGroupSelect01" onchange="Menu.change(this)">
                <option value="all">All</option>
                @foreach($all_categories as $c)
                <option value="{{ str_slug($c->name) }}" {{ $c->name == $active_category ? 'selected' : '' }}>{{ $c->name }}</option>
                @endforeach
              </select>
            </div>
            @foreach($categories as $c)
                <div class="menu__item">
                    <div class="category">
                        <h1 class="category__name text-center my-5">{{ $c->name }}</h1>
                        @if(isset($c->description))
                            <p class="category__description">{!! $c->description !!}</p>
                        @endif
                    </div>
                    <div class="service">
                        <div class="row">
                            @foreach($c->services()->whereNull('service_id')->orderBy('order')->get() as $s)
                                @include('menu.service', [
                                    'service' => $s
                                ])
                            @endforeach
                        </div>
                    </div>
                    @foreach($c->subCategories as $sc)
                        <div class="sub-category">
                            <h3 class="sub-category__name">{{ $sc->name }}</h3>
                            <p class="sub-category__description">{!! $sc->description !!}</p>
                        </div>
                        <div class="sub-service">
                            <div class="row">
                                @foreach($sc->services()->whereNull('service_id')->orderBy('order')->get() as $s)
                                    @include('menu.sub-service', [
                                        'service' => $s
                                    ])
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
            @else
                <h1>No menu items to show</h1>
            @endif
        </div>
    </div>
@endsection


@section('footer')
    @include('partials.footer')
@endsection
