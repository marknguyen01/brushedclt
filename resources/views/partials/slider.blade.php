<div class="slider">
    <div class="slider__child d-flex align-items-center bg-color--purple" style="background-image:url('{{ asset('img/bg/bg-image-4.png')}}')">
        <div class="slider__content text-center w-100">
            <a href="/">
                <img class="img-fluid d-inline" src="{{ asset('img/logo.png') }}" alt="{{ setting('site.title') }} Logo">
            </a>
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
                <a class="button button--yellow" href="/book">Book Now</a>
                <a class="button button--purple-light" href="/gift">Gift Cards</a>
            </div>
        </div>
    </div>
</div>
