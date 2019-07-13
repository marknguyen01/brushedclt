@if(isset($reviews) && sizeof($reviews) > 0)
<div class="section p-3 p-lg-5" id="review">
    <div class="container">
        <div class="section__title text-center">
            <h2 class="text-color--pink">Our Reviews</h2>
        </div>
        <div class="review">
            <div class="review-header">
                @foreach($reviews as $review)
                    <div class="review-header__image text-center">
                        <div class="client-image-wrapper">
                            <div class="client-image" style="background-image:url('{{ $review['image'] }}')">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="review-body mt-5">
                @foreach($reviews as $review)
                    <div class="review-body__client text-center">
                        <div class="client-rating mb-3">
                            @for($i = 0; $i < $review['rating']; $i++)
                                <ion-icon name="star"></ion-icon>
                            @endfor
                            @for($i = 0; $i < 5 - $review['rating']; $i++)
                                <ion-icon name="star-outline"></ion-icon>
                            @endfor
                        </div>
                        <div class="client-name mb-3">{{ $review['name'] }}</div>
                        <div class="client-review">{{ $review['description'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
