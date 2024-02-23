@vite(['resources/css/header.css'])

<nav class="navbar navbar-expand-lg p-4 sticky-top">
    <div class="container-fluid" data-aos="fade" data-aos-duration="1500">
        <a class="navbar-brand col-8 text-light fw-bold d-flex" href="{{ route('dashboard') }}">
            <i class="fa-solid fa-person-digging fs-1"></i>
        </a>
            <button class="navbar-toggler bg-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon bg-white text-white"></span>
            </button>
        <div class="collapse navbar-collapse col-4" id="navbarNav">
            <ul class="navbar-nav h-100">
                <li class="nav-item mx-5 h-100">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('aboutUs') }}">TENTANG KAMI</a>
                </li>
                <li class="nav-item mx-5 h-100">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('portfolio') }}">PORTFOLIO</a>
                </li>
                <li class="nav-item mx-5 h-100">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('contact') }}">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>