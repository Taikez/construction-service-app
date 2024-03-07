@vite(['resources/css/header.css'])

<nav class="navbar navbar-expand-lg p-4 sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand text-light fw-bold d-flex align-items-center" href="{{ route('dashboard') }}">
            <i class="fa-solid fa-person-digging fs-1"></i>
        </a>
        <button class="navbar-toggler bg-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon bg-white text-white"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end px-5" id="navbarNav">
            <ul class="navbar-nav h-100">
                <li class="nav-item h-100 px-5">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('aboutUs') }}">TENTANG KAMI</a>
                </li>
                <li class="nav-item h-100 px-5">
                    <a class="nav-link text-light" aria-current="page" href="{{ route('portfolio') }}">PORTFOLIO</a>
                </li>
                <li class="nav-item h-100 px-5">
                    <a class="nav-link text-light" aria-current="page" href="https://wa.link/0b9z2e">KONTAK</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
