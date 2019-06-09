@if(isset($reviews) && sizeof($reviews) > 0)
<div class="section" id="review">
    <div class="container">
        <div class="review">
            <div class="review-header">
                @foreach($reviews as $review)
                    <div class="review-header__image text-center">
                        <img src="{{ $review['image'] }}" alt="{{ $review['name'] }} Image">
                    </div>
                @endforeach
            </div>
            <div class="review-body mt-5">
                @foreach($reviews as $review)
                    <div class="review-body__client text-center">
                        <div class="client-rating mb-3">
                            @for($i = 0; $i < $review['rating']; $i++)
                                <img src="{{ asset('img/star-filled.svg')}}" class="d-inline">
                            @endfor
                            @for($i = 0; $i < 5 - $review['rating']; $i++)
                                <img src="{{ asset('img/star.svg')}}" class="d-inline">
                            @endfor
                        </div>
                        <h3 class="client-name">{{ $review['name'] }}</h3>
                        <p class="client-review">{{ $review['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
