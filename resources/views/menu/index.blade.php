@extends('layout')

@section('css_links')
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
@endsection

@section('header')
    @include('partials.header')
@endsection

@section('content')
    <div class="menu">
        <div class="container">
            @if(isset($categories))
            @foreach($categories as $c)
                <div class="menu__item">
                    <div class="category">
                        <h1 class="category__name text-center mb-2">{{ $c->name }}</h1>
                        @if(isset($c->description))
                            <p class="category__description">{!! $c->description !!}</p>
                        @endif
                    </div>
                    <div class="service">
                        <div class="row">
                            @foreach($c->services()->whereNull('service_id')->get() as $s)
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
                                @foreach($sc->services()->whereNull('service_id')->get() as $s)
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
