@if(isset($reviews) && sizeof($reviews) > 0)
<div class="section bg-color--purple p-3 p-lg-5" id="review">
    <div class="container">
        <div class="section__title text-center">
            <span class="section__title--cursive text-color--white">Customers love us</span>
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
                        <h3 class="client-name">{{ $review['name'] }}</h3>
                        <p class="client-review">{{ $review['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endif
