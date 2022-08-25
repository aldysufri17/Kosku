@extends('frontend.layouts.app')
@section('title', 'Profile')
@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<div class="" style="background-color: #eee;">
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2 class="font-weight-bold">Profile</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li>Profile</li>
                </ol>
            </div>
        </div>
    </section><!-- Breadcrumbs Section -->
    <section>
        <div class="container bg-light p-4 ">
            <div class="row justify-content-center">
                <div class="col-sm">
                    <label>Tipe Kos</label>
                    <select class="form-select">
                        <option value="">Laki</option>
                        <option value="">Cewek</option>
                        <option value="">Campur</option>
                    </select>
                </div>
                <div class="col-sm">
                    <label>Rentan Harga</label>
                    <input autocomplete="off" type="text"
                        class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleName"
                        placeholder="Nama" name="name" value="{{ old('name') }}">
                </div>
                <div class="col-sm">
                    <label></label>
                    <input autocomplete="off" type="text"
                    class="form-control form-control-user @error('name') is-invalid @enderror" id="exampleName"
                    placeholder="Nama" name="name" value="{{ old('name') }}">
                </div>
                <div class="col-sm">
                    <button class="btn btn-primary mt-4" style="width: 100%;">Cari</button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid">
            <div class="row justify-content-center">
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
    </section>
</div>
@endsection
