@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
<x-alert />
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center"
    style="background: url('/images/{{$kos->cover}}') top center; background-size: cover;">
    <!-- Slide 1 -->
    <div class="carousel-item active">
        <div class="carousel-container">
            <h2 class="animate__animated animate__fadeInDown"><span>Mau Cari Tempat Kos ?</span>
            </h2>
            <p class="animate__animated animate__fadeInUp">Cari Kos Sesuai Kebutuhanmu di <span
                    class="fw-bold">{{$kos->nama}}</span> Sekarang.</p>
            <a href="/daftar" class="btn-get-started animate__animated animate__fadeInUp scrollto">Cari Kamar Kos</a>
        </div>
    </div>
</section><!-- End Hero -->

{{-- <div id="tracking" class="container p-4 mt-5 shadow-sm" style="border-radius: 25px; background: rgba(5, 87, 158, 0.9) !important;">
    <div class="search">
        <div class="section-title">
            <h4 class="fw-bold text-light">Tracking Kode Booking</h4>
        </div>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukkan Kode Booking Anda"
                aria-label="Recipient's username" aria-describedby="button-addon2">
            <button class="btn btn-outline-light" type="button" id="button-addon2">Cari</button>
        </div>
        <div class="md-stepper-horizontal orange">
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
        </div>
    </div>
</div> --}}

<!-- ======= Services Section ======= -->
<section id="icon-boxes" class="icon-boxes">
    <div class="container" data-aos="fade-up">
        <div class="d-flex justify-content-between mb-3">
            <h2 class="title" style="color: #054a85;">Kamar kos pilihan</h2>
            <a href="/daftar" class="btn btn-light shadow-sm" style="border:1px solid rgb(189, 189, 189)">Lihat Semua</a>
        </div>
        <div class="row">
            @foreach ($kamar as $key=>$item)
            <div class="col-md-5 mt-5 col-lg-4 col-xl-3">
                <a href="{{route('detail.kamar',$item->id)}}">
                    <div class="card card-item shadow-lg text-black">
                        <div class="img-content" style="background-image: url('/images/kamar/{{$item->cover}}');">
                        </div>
                        <div class="card-body">
                            <div>
                                <h4 class="card-title fw-bold">Kamar Nomor {{$item->pintu->nama}}</h4>
                                <p class="text-muted my-0">Ukuran : {{$item->ukuran}}</p>
                                <span style="font-size: 14px">Terakhir diupdate {{$item->updated_at->format('d M Y')}}</span>
                            </div>
                            <div class="d-flex justify-content-between total font-weight-bold mt-3">
                                <span>Rp {{$item->harga}}</span><span>/ bulan</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- End Services Section -->
<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="text-center">
                <h1 class="logo fw-bold"></i>K<i class="bi bi-house-heart-fill"></i>SKU</h1>
                <span class="text-start">{{$kos->deskripsi}}</span>
                <div class="row mt-3">
                    <div class="col">
                        <div class="fw-bold">Nomor Telp</div>
                        <div class="">{{$kos->telp}}</div>
                    </div>
                    <div class="col">
                        <div class="fw-bold">Email</div>
                        <div class="">{{$kos->email}}</div>
                    </div>
                    <div class="col">
                        <div class="fw-bold">Alamat</div>
                        <div class="">{{$kos->alamat}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
