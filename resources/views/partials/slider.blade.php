<div class="slider">
    <div class="slider__child d-flex align-items-center" style="background-image:url('{{ asset('img/bg/bg-image-4.jpg')}}')">
        <div class="slider__content text-center w-100">
            <a href="/">
                <img style="max-height: 190px" class="img-fluid d-inline" src="/storage/{{ setting('site.logo') }}" alt="{{ setting('site.title') }} Logo">
            </a>
            <h2 class="mt-3">Blowouts & Nails & Brows</h2>
            <p>{{ setting('site.description') }}</p>
            <div class="slider__social my-3">
                <a class="social-icon" item-start href="tel:{{ setting('contact.phone') }}">
                    <ion-icon name="ios-call"></ion-icon>
                </a>
                <a class="social-icon" href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode(setting('contact.address')) }}">
                    <ion-icon name="ios-navigate"></ion-icon>
                </a>
                <a class="social-icon" href="{{ setting('contact.facebook') }}">
                    <ion-icon name="logo-facebook"></ion-icon>
                </a>
                <a class="social-icon" href="{{ setting('contact.instagram') }}">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
                <a class="social-icon" href="{{ setting('contact.pinterest') }}">
                    <ion-icon name="logo-pinterest"></ion-icon>
                </a>
            </div>
            <div class="slider__button-group mt-5">
                <a class="button button--yellow" href="#">Book Now</a>
                <a class="button button--regular" href="/menu">View Menu</a>
            </div>
        </div>
    </div>
</div>
