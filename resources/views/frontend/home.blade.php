@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
<x-alert />
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><span>Mau Cari Tempat Kos ?</span>
            </h2>
            <p class="animate__animated animate__fadeInUp">Cari Kos Sesuai Kebutuhanmu di Kosku Sekarang.</p>
            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Lihat Data Kos</a>
        </div>
    </div>
</section><!-- End Hero -->

<div class="container bg-light p-4 mt-5" style="border-radius: 25px">
    <div class="search">
        <div class="section-title">
            <h4 class="fw-bold">Tracking Kode Booking</h4>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Kode Booking Anda" aria-label="Recipient's username"
                aria-describedby="button-addon2">
            <button class="btn btn-outline-primary" type="button" id="button-addon2">Cari</button>
        </div>
        {{-- <div class="md-stepper-horizontal orange">
            <div class="md-step active">
                <div class="md-step-circle"><span>1</span></div>
                <div class="md-step-title">Ajukan sewa</div>
                <div class="md-step-bar-right active"></div>
            </div>
            <div class="md-step">
                <div class="md-step-circle"><span>2</span></div>
                <div class="md-step-title">Pemilik menyetujui</div>
                <div class="md-step-bar-left active"></div>
                <div class="md-step-bar-right"></div>
            </div>
            <div class="md-step">
                <div class="md-step-circle"><span>3</span></div>
                <div class="md-step-title">Bayar sewa pertama</div>
                <div class="md-step-bar-left"></div>
                <div class="md-step-bar-right"></div>
            </div>
            <div class="md-step">
                <div class="md-step-circle"><span>4</span></div>
                <div class="md-step-title">Check-in</div>
                <div class="md-step-bar-left"></div>
            </div>
        </div> --}}
    </div>
</div>
<!-- ======= Services Section ======= -->
<section id="icon-boxes" class="icon-boxes">
    <div class="container" data-aos="fade-up">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="title" style="color: #054a85;">Kamar kos pilihan</h2>
            <button class="btn btn-light shadow-sm" style="border:1px solid rgb(189, 189, 189)">Lihat Semua</button>
        </div>
        <div class="row">
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->

<!-- ======= Services Section ======= -->
<section id="icon-boxes" class="icon-boxes">
    <div class="container" data-aos="fade-up">

        <div class="d-flex justify-content-between mb-3">
            <h2 class="title" style="color: #054a85;">Rumah kos pilihan</h2>
            <button class="btn btn-light shadow-sm" style="border:1px solid rgb(189, 189, 189); ">Lihat Semua</button>
        </div>

        <div class="row">
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-item col-md-5 mt-2 col-lg-4 col-xl-3">
                <div class="card shadow-lg text-black">
                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid">
                    <div class="card-body">
                        <div>
                            <div class="d-flex">
                                <span class="badge bg-warning">Campur</span>&nbsp;
                                <span class="text-danger font-italic"> Sisa 1 Unit</span>
                            </div>
                        </div>
                        <div class="text-start mt-2">
                            <h6 class="card-title">Kost Apik Juragan UI Tipe A Beji Depok</h6>
                            <p class="text-muted mb-2 fw-bold">Semarang</p>
                        </div>
                        <span class="text-muted" style="font-size: 15px">K. Mandi Dalam ·WiFi ·AC ·Kasur ·Akses 24
                            Jam</span>
                        <div class="d-flex justify-content-between total font-weight-bold mt-3">
                            <span>Rp1.260.000</span><span>/ bulan</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Services Section -->

@endsection
