@extends('layouts.app')

@section('title')
    Dashboard | Construction Service 
@endsection

@section('main')
    <div id="banner" class="container-fluid d-flex align-items-center pb-5">
        <div id="banner-text-container" class="container pt-5">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="container">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div id="banner-text" class="p-5 rounded" data-aos="fade-up" data-aos-duration="1500">
                                <div data-aos="fade" data-aos-duration="1500" data-aos-delay="1000">
                                    <div class="row">
                                        <h1 class="fw-bold col-lg-8 col-md-8 col-sm-12">Suheri's Construction Services</h1>
                                    </div>
                                    <hr class="divider">
                                    <p class="mb-5 lh-lg">
                                        Selamat datang di <b><i>Suheri's Construction Services</i></b>! Kami adalah mitra <b>terpercaya</b> untuk proyek konstruksi Anda, memberikan layanan <b>berkualitas tinggi</b> yang sesuai dengan kebutuhan dan harapan Anda. Terima kasih atas kepercayaannya!</p>
                                    <div class="row">
                                        <a id="contact-btn" class="btn btn-lg text-white fs-6 col-lg-5 col-md-6 col-sm-12" href="https://wa.link/0b9z2e">
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
                </div>
            </div>
        </div>
    </div>
    <div id="our-offers" class="container-fluid pt-5 pb-5">
        <div class="container mb-5">
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-bold text-center text-white pt-5 pb-5" data-aos="fade" data-aos-duration="3000">Kenapa Pilih Kami?</h1>
                </div>
            </div>
        </div>
        <div class="container mb-5">
            <div class="row">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="col-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-5" >
                                    <div data-aos="fade-up-right" data-aos-duration="1500">
                                        <i id="offer-icon" class="fa-solid fa-thumbs-up fs-1 mb-5"></i>
                                        <h3 class="fw-bold text-white">Kuat Dan Rapih</h3>
                                        <p class="d-flex justify-content-center text-white">Layanan konstruksi berkualitas, kuat, dan rapih, sesuai harapan Anda.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-5">
                                    <div data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">
                                        <i id="offer-icon" class="fa-solid fa-bolt fs-1 mb-5"></i>
                                        <h3 class="fw-bold text-white">Cepat dan Tepat</h3>
                                        <p class="d-flex justify-content-center text-white">
                                            Layanan konstruksi yang cepat, tetapi tidak lupa dengan ketepatan.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 text-center p-5">
                                    <div data-aos="fade-up-left" data-aos-duration="1500" data-aos-delay="200">
                                        <i id="offer-icon" class="fa-solid fa-arrow-right-arrow-left fs-1 mb-5"></i>
                                        <h3 class="fw-bold text-white">Fleksibel</h3>
                                        <p class="d-flex justify-content-center text-white">
                                            Layanan konstruksi fleksibel, jasa disesuaikan dengan lingkungan yang dihadapi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="testimony-container" class="container-fluid pt-5 pb-5">
        <div data-aos="fade-down" data-aos-duration="1500">
            <i class="fa-solid fa-star-half-stroke d-flex justify-content-center fs-3 mt-3 mb-3" id="star-icon"></i>
        </div>
        <h1 class="text-center fw-bold mb-3" data-aos="fade" data-aos-duration="1000" data-aos-delay="500">Testimoni Pelanggan</h1>
        <div class="row p-4 d-flex justify-content-center px-5">
            <div id="testimony-card" class="card col-lg-3 col-md-6 col-sm-12 mb-2 p-4 shadow mx-5" data-aos="fade-up-right" data-aos-duration="1500">
                <div class="card-body">
                    <div class="card-body-text text-center">
                        <p class="fs-5 text-secondary">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit est eveniet labore, illum odio dignissimos distinctio aspernatur provident, unde, eligendi quae! Distinctio, molestiae. Repellat excepturi cum deleniti a eos."</p>
                    </div>
                    <div class="card-body-customer text-center mt-5">
                        <h4 style="color: #e24e09">John D.</h4>
                        <h6 class="text-secondary">President</h6>
                    </div>
                </div>
            </div>
            <div id="testimony-card" class="card col-lg-3 col-md-6 col-sm-12 mb-2 p-4 shadow mx-5" data-aos="fade-up" data-aos-duration="1500">
                <div class="card-body">
                    <div class="card-body-text text-center">
                        <p class="fs-5 text-secondary">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit est eveniet labore, illum odio dignissimos distinctio aspernatur provident, unde, eligendi quae! Distinctio, molestiae. Repellat excepturi cum deleniti a eos."</p>
                    </div>
                    <div class="card-body-customer text-center mt-5">
                        <h4 style="color: #e24e09">John D.</h4>
                        <h6 class="text-secondary">President</h6>
                    </div>
                </div>
            </div>
            <div id="testimony-card" class="card col-lg-3 col-md-6 col-sm-12 mb-2 p-4 shadow mx-5" data-aos="fade-up-left" data-aos-duration="1500">
                <div class="card-body">
                    <div class="card-body-text text-center">
                        <p class="fs-5 text-secondary">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus impedit est eveniet labore, illum odio dignissimos distinctio aspernatur provident, unde, eligendi quae! Distinctio, molestiae. Repellat excepturi cum deleniti a eos."</p>
                    </div>
                    <div class="card-body-customer text-center mt-5">
                        <h4 style="color: #e24e09">John D.</h4>
                        <h6 class="text-secondary">President</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="consultation-container">
        <div id="consultation-container-overlay">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-5 col-md-8 col-sm-12">
                        <h1 class="text-white fw-bold" data-aos="fade" data-aos-duration="1000">Kami mengutamakan kepercayaan Anda!</h1>
                        <div id="line" class="col-lg-5 col-md-8 col-sm-12 mb-5" data-aos="fade-right" data-aos-duration="1000"></div>
                        <h5 class="text-white lh-lg mb-5" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">Masih <b>ragu</b> dengan jasa kami? Kami menawarkan <b>konsultasi gratis</b> untuk lebih mengenal Anda dan kebutuhan Anda! Tekan tombol dibawah untuk memulai konsultasi gratis Anda!</h5>
                        <div class="row">
                            <a id="contact-btn" class="btn btn-lg text-white fs-6 col-lg-5 col-md-6 col-sm-12" href="https://wa.link/0b9z2e">
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
    </div>
    <div id="map-container">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3966.8437604136216!2d106.80302727498979!3d-6.151673693835401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMDknMDYuMCJTIDEwNsKwNDgnMjAuMiJF!5e0!3m2!1sen!2sid!4v1709625073747!5m2!1sen!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-100 h-100" data-aos="fade" data-aos-duration="1000"></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left" data-aos-duration="1000">
                    <div class="px-5">
                        <i class="fa-solid fa-map-location-dot d-flex justify-content-center fs-1 mb-3" style="color: #e24e09"></i>  
                        <h1 class="text-center fw-bold mb-5">Lokasi Kami</h1>
                        <h5 class="lh-lg">Di samping kiri terdapat lokasi kantor pusat kami! Mau konsultasi secara langsung? Klik peta tersebut dan Anda akan diarahkan ke kantor kami!</h5>
                        <br>
                        <a href="https://maps.app.goo.gl/YpkTdxqJzbWjCidV6" class="lh-lg fs-5 text-decoration-none text-black"><b>Alamat:</b> Jl. Krendang Raya No.35B, RT.8/RW.1, Krendang, Kec. Tambora, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11260</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection