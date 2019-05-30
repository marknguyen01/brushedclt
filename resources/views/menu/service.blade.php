
<div class="col-lg-{{ $service->column_width }}">
    <div class="service-item">
        <div class="service-item__header">
            <h3 class="service-item__name">{{ $service->name }}</h3>
            <span class="dots"></span>
            <div class="service-item__price h3">${{ $service->price }}{{ $service->is_exact_price ? '' : '+' }}</div>
        </div>
        <p class="service-item__description">{{ $service->description }}</p>
        <div class="sub-service">
            <div class="row">
            @foreach($service->subServices as $ss)
                @include('menu.sub-service', [
                    'service' => $ss
                ])
            @endforeach
            </div>
        </div>
    </div>
</div>
