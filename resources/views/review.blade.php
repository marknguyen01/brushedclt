@if(isset($reviews) && sizeof($reviews) > 0)
<div class="section px-3 px-lg-5 d-flex align-items-center" id="review">
    <div class="container">
        <div class="section__title text-center font-family--cursive">
          Testimonials
        </div>
        <review-component :review-data="{{ $reviews }}"></review-component>
    </div>
</div>
@endif
