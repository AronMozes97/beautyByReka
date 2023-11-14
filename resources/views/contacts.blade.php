@extends('core.html')
@section('body')
    <style>
        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
    <h1 class="h1">
        Elérhetőségek
    </h1>
    <div class="contact-container">
        <div class="contact-iframe">
            <iframe
                class="contact"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2690.9031366355916!2d19.383110076732624!3d47.58912608918351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741c9a98416e0bd%3A0x4face3c0331c8d19!2zR8O2ZMO2bGzFkSwgSsOhc3rDs3bDoXIgdS4gNjIsIDIxMDAgTWFneWFyb3JzesOhZw!5e0!3m2!1shu!2ssk!4v1699871537718!5m2!1shu!2ssk"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="contact-items">
            <div>
                <i class="bi bi-geo-alt-fill"></i>
                <div class="address">
                    <h5>Somorjai-Tamássy Réka Luca E.V.</h5>
                    <p>2100 Gödöllő, Jászóvár utca 62.</p>
                </div>
            </div>
            <div>
                <i class="bi bi-envelope-fill"></i>
                <h5><a href="mailto:somorjai.tamassy.reka@gmail.com">somorjai.tamassy.reka@gmail.com</a></h5>
            </div>
            <div>
                <i class="bi bi-telephone-fill"></i>
                <h5><a href="tel:+36305751487">+36305751487</a></h5>
            </div>
            <div>
                <a href="https://www.instagram.com/beauty_by_reka">
                    <i class="bi bi-instagram"></i>
                    <h5>Instagram</h5>
                </a>
            </div>
            <div>
                <a href="https://www.facebook.com/profile.php?id=100090861364633">
                    <i class="bi bi-facebook"></i>
                    <h5>Facebook</h5>
                </a>
            </div>
        </div>
    </div>
@endsection
