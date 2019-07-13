<!-- Start Service Style-->
@if(isset($featured_services))
<div class="sectin p-3 p-lg-5 align-content-center d-flex flex-wrap" id="service">
      <div class="w-100 round-decor d-none d-md-block"></div>
      <div class="section__title text-center w-100" style="padding-top: 25vh">
          {{-- <span class="section__title--cursive text-color--white">Ultimate destination</span> --}}
          <h2 class="text-color--pink">The ultimate destination for all your beauty needs</h2>
      </div>
      <div class="row">
          @foreach($featured_services as $s)
          <!-- Start Single Service -->
          <a class="col-md-3 d-flex align-items-center service" href="{{ route('menu', str_slug($s->category()->exists() ? $s->category->name : $s->name)) }}">
              <div class="service__content w-100 py-3 py-md-4 py-lg-5 px-1 mb-3 mb-md-4 mb-lg-5 text-center text-color--white bg-color--black">
                  <div class="service-title">
                    {{ $s->name }}
                  </div>
                  <div>starts at ${{ $s->price }}</div>
                  @if($s->description)
                      <p>{{ $s->description }}</p>
                  @endif
              </div>
          </a>
          @endforeach
      </div>
      <!-- End Single Service -->
</div>
@endif
<!-- End Service Style-->
