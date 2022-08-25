@extends('frontend.layouts.app')
@section('title', 'Profile')
@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<div class="" style="background-color: #eee;">
    <section class="breadcrumbs" style="background-color: #eee;">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="font-weight-bold">Profile</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li>Profile</li>
                </ol>
            </div>
        </div>
    </section>
    <section style="margin-top: -40px">
        <div class="container">
            <header class="header">
                <div class="hero"
                    style="background-image: url({{asset('frontend/assets/img/portfolio/portfolio-1.jpg')}})">
                </div>
                <div class="features feature-1"
                    style="background-image: url({{asset('frontend/assets/img/portfolio/portfolio-2.jpg')}})">
                </div>
                <div class="features bg-warning feature-2"
                    style="background-image: url({{asset('frontend/assets/img/portfolio/portfolio-3.jpg')}})">
                    <button class="btn btn-secondary">Lihat Semua Gambar</button>
                </div>
            </header>
        </div>
    </section>

    <section style="margin-top: -100px">
        <div class="container">
            <div class="text-start mt-2">
                <h4 class="card-title fw-bold">Kost Apik Juragan UI Tipe A Beji Depok</h4>
                <p class="text-muted mb-2"><i class="bi bi-geo-alt-fill"></i> Jalan tukad nyali blok sma 6 no 64
                    denpasar sanur, Bali , Kota Denpasar</p>
                    <div>
                        <div class="d-flex">
                            <span class="badge bg-warning">Campur</span>&nbsp;
                            <span class="text-danger font-italic"> Sisa 1 Unit</span>
                        </div>
                    </div>
                <span style="font-size: 15px">Terakhir diupdate 16 Agustus 2022</span>
            </div>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="float-end">
                        <a href="#"><span class="badge bg-secondary p-2"><i class="bi bi-heart-fill"></i> Simpan</span></a>
                    </div>
                    <br>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <h6 class="card-title mb-2 fw-bold">Fasilitas</h6>
                            <div class="">
                                <p><i class="bi bi-bucket-fill"></i> K. Mandi Dalam</p>
                                <p><i class="bi bi-router-fill"></i> Jaringan Wifi Gratis</p>
                                <p><i class="bi bi-bicycle"></i> Area Parkir</p>
                            </div>
                        </div>
                        <div class="col">
                            <h6 class="card-title fw-bold">Tipe</h6>
                            <table class="table table-borderless" cellspacing="0" width="100%">
                                <tr>
                                    <td class="font-weight-bold">NIM Peminjam</td>
                                    <td>: adasdad</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Nama Peminjam</td>
                                    <td>: asdasdads</td>
                                </tr>
                                <tr>
                                    <td class="font-weight-bold">Keperluan</td>
                                    <td>: asdasd</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="">
                        <h6 class="card-title mb-2 fw-bold">Deskripsi</h6>
                        <p>
                            Kost ini terdiri dari 2 lantai. Tipe kamar B berada di lantai 1 dan lantai 2. Semua kamar
                            di<br>
                            tipe ini memiliki jendela yang menghadap secara langsung ke arah koridor dan ke arah
                            luar.<br>
                            <br>
                            Tersedia juga layanan pembersihan AC secara rutin setiap 3 bulan sekali. Apabila Anda<br>
                            membutuhkan bantuan, Anda bisa menghubungi penjaga yang bertugas dari pukul 08.00-20.00
                            WIB.<br>
                            <br>
                            Informasi fasilitas :<br>
                            Daya listrik : 1300 VA (Token).<br>
                            Sumber Air : PAM.<br>
                            Wifi : Indihome 20 Mbps.<br>
                            Kapasitas parkir : 8 motor, 2 mobil, dan 10 sepeda.<br>
                            <br>
                            Kost ini terletak 100 m dari jalan raya dan akses jalan yang dapat dilalui oleh mobil.<br>
                            Berlokasi 800 m dari Universitas Katolik Widya Mandala - Kampus Dinoyo, 3.4 km dari<br>
                            Universitas Airlangga Kampus B, 2.1 km dari Stasiun Wonokromo, dan 1 km dari Marvel City
                            Mall.
                        </p>
                    </div>

                </div>
                <div class="col col-lg-4">
                    <div class="card float-end shadow-lg" style="width: 18rem;">
                        <div class="card-header">
                            <h6 class="card-title text-center fw-bold">Rp1.935.000/ Bulan</h6>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <input autocomplete="off" type="date"
                                    class="form-control form-control-user @error('name') is-invalid @enderror"
                                    id="exampleName" placeholder="Nama" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="my-2">
                                <select class="form-select">
                                    <option value="">Perbulan</option>
                                    <option value="">3 Bulan</option>
                                    <option value="">6 Bulan</option>
                                    <option value="">Setahun</option>
                                </select>
                            </div>
                            <div class=""><button class="btn btn-success" style="width:100%">Submit</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
