@extends('layout')

@section('css_links')
    <link rel="stylesheet" href="{{ mix('css/menu.css') }}">
@endsection

@section('title')
 | {{ isset($active_category) ? Str::title($active_category) : 'All Services' }}
@endsection

@section('header')
<div class="menu-header">
  @include('partials.navbar')
  <div class="menu-header-content d-flex align-items-center h-100 text-center justify-content-center
        @if(count($categories) > 1)
            no-image">
        @else
            @if(isset($categories->first()->image))
            " style="background-image:url({{ $categories->first()->image }})">
            @else
            no-image">
            @endif
        @endif
    <div>
      <div class="menu-title">Pricing List</div>
      <div class="menu-name">{{ isset($active_category) ? $active_category : 'All Services' }}</div>
    </div>
  </div>
</div>
@endsection

@section('content')
  @if(isset($categories))
  <div class="menu-selector">
    <div class="d-flex justify-content-center align-items-center h-100 w-100">
      <div class="container">
        <div class="input-group">
          <select class="custom-select" id="inputGroupSelect01" onchange="Menu.change(this)">
            @foreach($all_categories->sortBy('order') as $c)
            <option value="{{ str_slug($c->name) }}" {{ $c->name == $active_category ? 'selected' : '' }}>{{ $c->name }}</option>
            @endforeach
          </select>
        </div>
      </div>
    </div>
  </div>
  <div class="menu">
    <div class="container">
      @foreach($categories->sortBy('order') as $c)
          <div class="menu__item">
              <div class="category">
                  @if(count($categories) > 1)
                  <div class="category__name">
                    @if($c->name != "All")
                      {{ $c->name }}
                    @endif
                  </div>
                  @endif
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
                      <h3 class="sub-category__name font-family--h2">{{ $sc->name }}</h3>
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
    </div>
  </div>
  @else
      <h1>No menu items to show</h1>
  @endif

  @include('contact')
@endsection


@section('footer')
    @include('partials.footer')
@endsection
