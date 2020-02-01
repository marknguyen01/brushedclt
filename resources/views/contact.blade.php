<!-- Start Contact Form Style -->
<div class="section p-0"  id="contact">
      <div class="row no-gutters">
          <div class="col-lg-6">
            <div id="map" class="w-100" style="height: 100%; min-height: 50vh"></div>
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
                  window.open("http://maps.apple.com/?daddr={{ urlencode(setting('contact.address')) }}")
                });
              }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0ADDoM8I2FpsEFB41nfnNGdSBt96ZvX8&callback=initMap"
async defer></script>
          </div>
          <div class="col-lg-6 align-self-center">
            <div class="contact-content py-5 text-center text-lg-left px-0 px-lg-5 row align-items-center no-gutters">
              <div class="contact-info w-100">
                  <div class="contact-info__title">
                      <ion-icon name="ios-time"class="align-middle mr-1"></ion-icon>Operating Hours:
                  </div>
                  <div class="contact-info__content mt-3">
                    {!! setting('contact.hours') !!}
                  </div>
              </div>
              <div class="contact-info mt-5 w-100">
                  <div class="contact-info__title">
                      <ion-icon name="ios-call" class="align-middle mr-1"></ion-icon>Phone Number:
                  </div>
                  <div class="contact-info__content mt-3">
                      <a href="tel:{{ setting('contact.phone') }}">
                          {{ setting('contact.phone') }}
                      </a>
                  </div>
              </div>
              <div class="contact-info mt-5 w-100">
                  <div class="contact-info__title">
                      <ion-icon name="ios-navigate"class="align-middle mr-1"></ion-icon>Address:
                  </div>
                  <div class="contact-info__content mt-3">
                      <a href="http://maps.apple.com/?daddr={{ urlencode(setting('contact.address')) }}">
                          {{ setting('contact.address') }}
                      </a>
                  </div>
              </div>
            </div>
          </div>
      </div>
</div>
<!-- End Contact Form Style -->
