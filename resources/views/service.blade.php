<!-- Start Service Style-->
@if(isset($featured_services))
<div class="section-service section-ptb-120 bg_color--48" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title--19 text-center">
                    <span>We take for you</span>
                    <h2>Best Services</h2>
                    <p>The ultimate destination for all your beauty needs</p>
                </div>
            </div>
        </div>
        <div class="row mt--30">
            @foreach($featured_services as $s)
            <!-- Start Single Service -->
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="service text-center service-2 padding-none beauty-service">
                    <div class="thumb">
                        <a href="{{ $s->url ? $s->url : route('menu') }}">
                            <img src="{{ $s->image ? '/storage/' . $s->image : asset('img/no_image.png') }}" alt="service img">
                        </a>
                    </div>
                    <div class="content">
                        <h4>{{ $s->name }}</h4>
                        <p>starts at ${{ $s->price }}</p>
                        <p>{{ $s->description }}</p>
                        <a class="readmore_btn" href="{{ $s->url ? $s->url : route('menu') }}">View Menu</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End Single Service -->
        </div>
    </div>
</div>
@endif
<!-- End Service Style-->
