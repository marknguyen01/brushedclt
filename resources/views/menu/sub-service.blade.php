<div class="col-lg-{{ $service->column_width }}">
    <div class="sub-service-item">
        <div class="sub-service-item__header">
            <h5 class="sub-service-item__name">{{ $service->name }}</h5>
            <div class="sub-service-item__price h5">${{ $service->price }}{{ $service->is_exact_price ? '' : '+' }}</div>
        </div>
        <p class="sub-service-item__description">{{ $service->description }}</p>
    </div>
</div>
