@extends('layouts.app')

@section('title')
    Dashboard | Construction Service 
@endsection

@section('main')
    <div id="banner" class="container-fluid d-flex align-items-center">
        <div id="banner-text-container" class="col-lg-8 col-md-8 col-sm-12">
            <div id="banner-text" class="container col-lg-6 col-md-6 col-sm-12 p-5 rounded" data-aos="fade-up" data-aos-duration="1500">
                <div data-aos="fade" data-aos-duration="3000">
                    <h1 class="fw-bold col-lg-8 col-md-8 col-sm-12">Suheri's Construction Services</h1>
                    <hr class="divider">
                    <p class="mb-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis voluptatibus aliquid error ex modi suscipit incidunt voluptates iusto. Ullam suscipit, dicta debitis cumque accusantium assumenda aspernatur voluptas harum ad iusto.</p>
                    <button id="contact-btn" class="btn btn-lg text-white px-5 fs-6">HUBUNGI KAMI</button>
                </div>
            </div>
        </div>
    </div>
@endsection