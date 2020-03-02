<div class="hero">
    <div class="hero__child d-flex align-items-center">
        <div class="hero__content text-center w-100">
            <a href="/">
                <div class="site-motto">{{ setting('site.description') }}</div>
                <div class="site-title">Brushed</div>
                <!-- <img class="img-fluid d-inline hero__logo" src="{{ asset('img/logo.png') }}" alt="{{ setting('site.title') }} Logo"> -->
            </a>
            <div class="hero__social my-3">
                <a class="social-icon" href="tel:{{ setting('contact.phone') }}">
                    <ion-icon name="ios-call"></ion-icon>
                </a>
                <a class="social-icon" href="{{ $user_agent == 'ios' ? 'http://maps.apple.com/?daddr=' : 'https://www.google.com/maps/dir/?api=1&destination=' }}{{ urlencode(setting('contact.address')) }}">
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

        </div>
    </div>
</div>
