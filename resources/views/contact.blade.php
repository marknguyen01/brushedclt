<!-- Start Contact Form Style -->
<div class="section bg-color--black-light mt-5"  id="contact">
      <div class="row no-gutters">
          <div class="col-lg-6">
            <div id="map" class="w-100" style="height: 296px"></div>
            <script>
              var map;
              var postition = {lat: 35.2211538, lng: -80.8191352};
              function initMap() {
                map = new google.maps.Map(document.getElementById('map'), {
                  center: postition,
                  zoom: 15,
                  disableDefaultUI: true,
                });
                var infoWindow = new google.maps.InfoWindow({
                  content: "<p><strong>{{ setting('site.title') }}</strong></p>"
                  + "<p>{{ setting('contact.address') }}"
                });
                var marker = new google.maps.Marker({
                  position: postition,
                  map: map,
                });
                infoWindow.open(map, marker);

                map.addListener('click', function (){
                  window.open("{{ $user_agent == 'ios' ? 'http://maps.apple.com/?daddr=' . urlencode(setting('contact.address')) : 'https://www.google.com/maps/dir/?api=1&destination=' . urlencode(setting('contact.address')) }}")
                });
              }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0ADDoM8I2FpsEFB41nfnNGdSBt96ZvX8&callback=initMap"
async defer></script>
          </div>
          <div class="col-lg-6 py-5 text-center text-lg-left px-0 px-lg-5">
            <div class="contact-info">
                <div class="contact-info__title">
                    <ion-icon name="ios-time"class="align-middle mr-1"></ion-icon>Operating hours:
                </div>
                <div class="contact-info__content">
                  <div>Monday-Saturday: 10AM - 7:30PM</div>
                  <div>Sunday: 12AM - 5:30PM</div>
                </div>
            </div>
              <div class="contact-info mt-3">
                  <div class="contact-info__title">
                      <ion-icon name="ios-call" class="align-middle mr-1"></ion-icon>Phone Number:
                  </div>
                  <div class="contact-info__content">
                      <a href="tel:{{ setting('contact.phone') }}">
                          {{ setting('contact.phone') }}
                      </a>
                  </div>
              </div>
              <div class="contact-info mt-3">
                  <div class="contact-info__title">
                      <ion-icon name="ios-navigate"class="align-middle mr-1"></ion-icon>Address:
                  </div>
                  <div class="contact-info__content">
                      @if($user_agent == 'ios')
                          <a href="http://maps.apple.com/?daddr={{ urlencode(setting('contact.address')) }}">
                              {{ setting('contact.address') }}
                          </a>
                      @else
                          <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode(setting('contact.address')) }}">
                              {{ setting('contact.address') }}
                          </a>
                      @endif
                  </div>
              </div>
          </div>
      </div>
</div>
<!-- End Contact Form Style -->
