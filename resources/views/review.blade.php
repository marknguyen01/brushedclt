@if(isset($reviews) && sizeof($reviews) > 0)
<div class="section" id="review">
    <div class="container">
        <div class="section__title text-center">
            <span class="section__title--cursive">Customers love us</span>
            <h2>Our Reviews</h2>
        </div>
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
                                <span class="typcn typcn-star-full-outline"></span>
                            @endfor
                            @for($i = 0; $i < 5 - $review['rating']; $i++)
                                <span class="typcn typcn-star-outline"></span>
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
