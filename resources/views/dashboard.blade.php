@extends('layouts.app')

@section('title')
    Dashboard | Construction Service 
@endsection

@section('main')
    <div id="banner" class="container-fluid d-flex align-items-center pb-5">
        <div id="banner-text-container" class="col-lg-8 col-md-8 col-sm-12">
            <div id="banner-text" class="container col-lg-6 col-md-6 col-sm-12 p-5 rounded" data-aos="fade-up" data-aos-duration="1500">
                <div data-aos="fade" data-aos-duration="1500" data-aos-delay="1000">
                    <div class="row">
                        <h1 class="fw-bold col-lg-8 col-md-8 col-sm-12">Suheri's Construction Services</h1>
                    </div>
                    <hr class="divider">
                    <p class="mb-5 lh-lg">
                        Selamat datang di <b><i>Suheri's Construction Services</i></b>! Kami adalah mitra <b>terpercaya</b> untuk proyek konstruksi Anda, memberikan layanan <b>berkualitas tinggi</b> yang sesuai dengan kebutuhan dan harapan Anda. Terima kasih atas kepercayaannya!</p>
                    <div class="row">
                        <a id="contact-btn" class="btn btn-lg text-white fs-6 col-lg-4 col-md-4 col-sm-12" href="https://api.whatsapp.com/send?phone=6285811568097&amp;text=Halo%20Mas%20Suheri%20%2C%20Mohon%20Info%20Pasang%20dan%20Renovasi%20Atap%20Baja%20Ringan">
                            <div id="contact-btn-text" class="d-flex justify-content-between align-items-center">
                                HUBUNGI KAMI
                                <i class="fa-solid fa-phone"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="our-offers" class="pt-5">
        <h1 class="fw-bold text-center text-white pt-5 pb-5" data-aos="fade" data-aos-duration="3000">Penawaran Kami</h1>
        <div id="offers" class="row d-flex justify-content-center align-items-center p-5 me-5 lh-lg">
            <div id="offer-container" class="col-lg-3 col-md-12 col-sm-12 text-center px-5 mb-5" data-aos="fade-up-right"
                data-aos-duration="1500">
                <i id="offer-icon" class="fa-solid fa-thumbs-up fs-1 mb-5"></i>
                <h3 class="fw-bold text-white">Kuat Dan Rapih</h3>
                <p class="d-flex justify-content-center text-white">Layanan konstruksi berkualitas, kuat, dan rapih, sesuai harapan Anda.</p>
            </div>
            <div id="offer-container" class="col-lg-3 col-md-12 col-sm-12 text-center px-5 mb-5" data-aos="fade-up"
                data-aos-duration="1500" data-aos-delay="200">
                <i id="offer-icon" class="fa-solid fa-bolt fs-1 mb-5"></i>
                <h3 class="fw-bold text-white">Cepat dan Tepat</h3>
                <p class="d-flex justify-content-center text-white">
                    Layanan konstruksi yang cepat, tetapi tidak lupa dengan ketepatan.</p>
            </div>
            <div id="offer-container" class="col-lg-3 col-md-12 col-sm-12 text-center px-5 mb-5" data-aos="fade-up-left"
                data-aos-duration="1500" data-aos-delay="200">
                <i id="offer-icon" class="fa-solid fa-arrow-right-arrow-left fs-1 mb-5"></i>
                <h3 class="fw-bold text-white">Fleksibel</h3>
                <p class="d-flex justify-content-center text-white">
                    Layanan konstruksi fleksibel, jasa disesuaikan dengan lingkungan yang dihadapi.</p>
            </div>
        </div>
    </div>
@endsection