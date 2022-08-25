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
            <a href="" class="text-dark fw-bold"><span><i class="bi bi-chevron-left"></i> Kembali</span></a>
            <h3 class="fw-bold mb-3 mt-5">Pengajuan Sewa</h3>
            <div class="text-start">
                <h4 class="card-title fw-bold">Kost Apik Juragan UI Tipe A Beji Depok</h4>
                <p class="text-muted mb-2"><i class="bi bi-geo-alt-fill"></i> Jalan tukad nyali blok sma 6 no 64
                    denpasar sanur, Bali , Kota Denpasar</p>
            </div>
            <div class="md-stepper-horizontal orange">
                <div class="md-step active">
                    <div class="md-step-circle"><span>1</span></div>
                    <div class="md-step-title">Ajukan sewa</div>
                    <div class="md-step-bar-right active"></div>
                </div>
                <div class="md-step active">
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
            <div class="justify-content-center">
                {{-- <div class="text-center mt-3">
                    <h2>Tunggu hingga Pemilik Menyetujui Pengajuan Anda dan anda bisa melakukan pembayaran ketika sudah
                        disetujui.</h2>
                </div> --}}
                <div class="data-priadi">
                    <div class="d-flex justify-content-between total font-weight-bold mt-3 fw-bold">
                        <span>Total Biaya yang harus anda bayar</span><span>Rp 1.260.000</span>
                    </div>
                </div>
                <hr>
                <div class="data-priadi">
                    <div class="d-flex justify-content-between total font-weight-bold mt-3">
                        <h4 class="fw-bold">Metode pembayaran</h4>
                    </div>
                    <div class="d-flex justify-content-between total fw-bold mt-3">
                        <img src="{{asset('frontend/assets/img/bri.png')}}" alt="" width="10%"><span>034101000743</span>
                    </div>
                    <div class="d-flex justify-content-between total fw-bold mt-3">
                        <img src="{{asset('frontend/assets/img/bni.png')}}" alt="" width="10%"><span>034101000743</span>
                    </div>
                    <div class="d-flex justify-content-between total fw-bold mt-3">
                        <img src="{{asset('frontend/assets/img/mandiri.png')}}" alt=""
                            width="10%"><span>034101000743</span>
                    </div>
                    <div class="d-flex justify-content-between total fw-bold mt-3">
                        <img src="{{asset('frontend/assets/img/gopay.png')}}" alt=""
                            width="10%"><span>034101000743</span>
                    </div>
                </div>
                <hr>
                <div class="data-priadi">
                    <h4 class="fw-bold">Bukti Pembayaran</h4>
                    <span>Mohon upload bukti pembayaran anda.</span>
                    <div class="form-group mt-4">
                        <div class="ktp">
                            <label><span style="color:red;">*</span> Upload Bukti Pembayaran</label>
                            <input autocomplete="off" type="file"
                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                id="exampleName" placeholder="Nama" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                {{-- <div class="text-center mt-3">
                    <h2>Menunggu Konfirmasi Pembayaran...</h2>
                </div> --}}
                {{-- <div class="text-center mt-3">
                    <h2>Yey Sekarang anda sudah dapat melakukan Check-in.</h2>
                </div> --}}
            </div>

        </div>
    </section>
</div>
@endsection
