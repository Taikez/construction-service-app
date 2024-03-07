@vite(['resources/css/footer.css'])
<div id="footer-container" class="container-fluid">
    <div class="py-5"></div>
    <a href="{{ route('dashboard') }}" class="fw-bold text-white d-flex justify-content-center pt-5 fs-3 text-decoration-none mb-5">Website.com</a>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-2">
                                <a class="nav-link-secondary text-secondary text-center" aria-current="page" href="{{ route('dashboard') }}">BERANDA</a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-2">
                                <a class="nav-link-secondary text-secondary text-center" aria-current="page" href="{{ route('aboutUs') }}">TENTANG KAMI</a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-2">
                                <a class="nav-link-secondary text-secondary text-center" aria-current="page" href="{{ route('portfolio') }}">PORTFOLIO</a>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 text-center mb-2">
                                <a class="nav-link-secondary text-secondary text-center" aria-current="page" href="https://wa.link/0b9z2e">KONTAK</a>
                            </div>
                            <div 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center align-items-center">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="container">
                        <div class="row mt-5 mb-5">
                            <div class="col-4">
                                <a href="https://facebook.com"><i id="social-media-link" class="fa-brands fa-facebook fs-2"></i></a>
                            </div>
                            <div class="col-4">
                                <a href="https://instagram.com"><i id="social-media-link" class="fa-brands fa-instagram fs-2"></i></a>
                            </div>
                            <div class="col-4">
                                <a href="https://wa.link/0b9z2e"><i id="social-media-link" class="fa-brands fa-whatsapp fs-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <p class="text-secondary text-center" style="padding-top: 2rem; padding-bottom: 5rem;">Copyright ©2024 All rights reserved | This website is made with &#9829; by Julian</p>
        </div>
    </div>
</div>