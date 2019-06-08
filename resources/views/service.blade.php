<!-- Start Service Style-->
@if(isset($featured_services))
<div class="section bg-color--white" id="service">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    <span class="section__title--cursive">We take for you</span>
                    <h2>Best Services</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            @php $count = 0; @endphp
            @foreach($featured_services as $s)
            <!-- Start Single Service -->
            <div class="col-md-6 col-12">
              <div class="row no-gutters service">
                <div class="col-6 service__thumb {{ $count < 2 ? 'order-2' : 'order-1' }}">
                  <a href="{{ $s->url ? $s->url : route('menu') }}">
                      <img src="{{ isset($s->image) ? '/storage/' . $s->image : asset('img/no_image.png') }}" alt="{{ $s->name }}">
                  </a>
                </div>
                <div class="col-6 service__content py-5 px-1 text-center text-color--white {{ $count < 2 ? 'order-1' : 'order-2' }} {{ $count % 2 ? 'bg-color--black' : 'bg-color--purple' }}">
                    <h3>{{ $s->name }}</h3>
                    <p>starts at ${{ $s->price }}</p>
                    <p>{{ $s->description }}</p>
                    <a class="readmore_btn" href="{{ $s->url ? $s->url : route('menu') }}">View Menu</a>
                </div>
              </div>
            </div>
            @php $count++ @endphp
            @endforeach
            <!-- End Single Service -->
        </div>
    </div>
</div>
@endif
<!-- End Service Style-->
