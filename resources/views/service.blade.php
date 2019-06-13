<!-- Start Service Style-->
@if(isset($featured_services))
<div class="section bg-color--white" id="service" style="
    background-image: url('/img/bg/bg-image-1.png');
    background-size: cover;
    background-position: center center;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section__title text-center">
                    {{-- <span class="section__title--cursive text-color--white">Ultimate destination</span> --}}
                    <h2 class="text-color--pink">The ultimate destination for all your beauty needs</h2>
                </div>
            </div>
        </div>
        <div class="row no-gutters">
            @php $count = 0; @endphp
            @foreach($featured_services as $s)
            <!-- Start Single Service -->
            <div class="col-md-3">
              <div class="row no-gutters service">
                {{-- <div class="col-6 service__thumb {{ $count < 2 ? 'order-2' : 'order-1' }}">
                  <a href="{{ route('menu', str_slug($s->name)) }}" alt="{{ $s->name }}">
                      <img src="{{ isset($s->image) ? '/storage/' . $s->image : asset('img/no_image.png') }}" alt="{{ $s->name }}">
                  </a>
                </div> --}}
                <div class="col-12 service__content py-5 px-1 text-center text-color--white bg-color--black">
                    <div class="service-title">
                      <a href="{{ route('menu', str_slug($s->name)) }}">{{ $s->name }}</a>
                    </div>
                    <p>starts at ${{ $s->price }}</p>
                    <p>{{ $s->description }}</p>
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
