<!-- Start Service Style-->
@if(isset($featured_services))
<div class="section bg-color--white p-3 p-lg-5" id="service" style="
    background-image: url('/img/bg/bg-image-1.png');
    background-size: cover;
    background-position: center center;">

        <div class="section__title text-center">
            {{-- <span class="section__title--cursive text-color--white">Ultimate destination</span> --}}
            <h2 class="text-color--pink">The ultimate destination for all your beauty needs</h2>
        </div>
        <div class="row">
            @php $count = 0; @endphp
            @foreach($featured_services as $s)
            <!-- Start Single Service -->
            <div class="col-md-3 d-flex align-items-center">
                <div class="service__content w-100 py-3 py-md-4 py-lg-5 px-1 mb-3 mb-md-4 mb-lg-5 text-center text-color--white bg-color--black">
                    <div class="service-title">
                      <a href="{{ route('menu', str_slug($s->name)) }}">{{ $s->name }}</a>
                    </div>
                    <div>starts at ${{ $s->price }}</div>
                    @if($s->description)
                        <p>{{ $s->description }}</p>
                    @endif
                </div>
              </div>
              @php $count++ @endphp
              @endforeach
        </div>
        <!-- End Single Service -->
    </div>
</div>
@endif
<!-- End Service Style-->
