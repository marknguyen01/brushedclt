<!-- Start Contact Form Style -->
<div class="section bg-color--purple"  id="contact">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-6 col-md-12 col-12">
                <div class="section__title text-lg-left text-center">
                    <span class="section__title--cursive text-color--white">Your Best Solution</span>
                    <h2 class="text-color--pink">Contact Us</h2>
                </div>
            </div>
        </div> --}}
        <div class="row">
            {{-- <div class="col-lg-6 col-md-12 col-12 order-2 order-lg-1">
                <div class="contact-form">
                    <form action="/contact" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Name*" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your Email*" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" placeholder="Message*" required></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="w-100">Send Message</button>
                            </div>
                        </div>
                    </form>
                    <!-- End Form -->
                </div>
            </div> --}}
            <div class="col-12">
                <div class="contact-info text-center">
                    <div class="contact-info__title">
                        <ion-icon name="ios-call" class="align-middle mr-1"></ion-icon>Phone Number:
                    </div>
                    <div class="contact-info__content">
                        <a href="tel:{{ setting('contact.phone') }}">
                            {{ setting('contact.phone') }}
                        </a>
                    </div>
                </div>
                <div class="contact-info text-center mt-3">
                    <div class="contact-info__title">
                        <ion-icon name="ios-navigate"class="align-middle mr-1"></ion-icon>Address:
                    </div>
                    <div class="contact-info__content">
                        <a href="https://www.google.com/maps/dir/?api=1&destination={{ urlencode(setting('contact.address')) }}">
                            {{ setting('contact.address') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact Form Style -->
