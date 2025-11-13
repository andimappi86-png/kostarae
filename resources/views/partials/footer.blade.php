<footer class="footer-section text-white pt-5 pb-3">
    <div class="container">
        <div class="row gy-4 align-items-start">
            <!-- Logo & Description -->
            <div class="col-md-3 text-center text-md-start">
                <div class="d-flex align-items-center justify-content-center justify-content-md-start mb-2">
                    <img src="{{ asset('images/kosta.png') }}" alt="Logo" width="48" height="48" class="me-2">
                    <h4 class="fw-semibold mb-0">Kostaraé</h4>
                </div>
            </div>

            <!-- Menu -->
            <div class="col-md-3 text-center text-md-start">
                <h6 class="fw-semibold mb-3 text-uppercase">Menu</h6>
                <ul class="list-unstyled">
                    <li><a href="{{ route('home') }}" class="footer-link">Beranda</a></li>
                    <li><a href="{{ route('terms') }}" class="footer-link">Syarat dan Ketentuan</a></li>
                    <li><a href="{{ route('help') }}" class="footer-link">Panduan</a></li>
                    <li><a href="{{ route('contact') }}" class="footer-link">Kontak</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-3 text-center text-md-start">
                <h6 class="fw-semibold mb-3 text-uppercase">Contact Information</h6>
                <p class="mb-1">
                    <i class="bi bi-telephone-fill me-2"></i> +62 320 666 790
                </p>
                <p class="mb-1">
                    <i class="bi bi-envelope-fill me-2"></i> KostTa@.com
                </p>
            </div>

            <!-- Social Media -->
            <div class="col-md-3 text-center text-md-start">
                <h6 class="fw-semibold mb-3 text-uppercase">Social Media</h6>
                <div class="d-flex justify-content-center justify-content-md-start gap-3">
                    <a href="#" class="social-icon"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>

        <hr class="my-4 border-light opacity-25">

        <div class="text-center small text-white-50">
            &copy; {{ date('Y') }} Kost`Ta. All rights reserved.
        </div>
    </div>
</footer>
