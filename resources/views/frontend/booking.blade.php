@extends('frontend.layouts.app')
@section('title', 'Profile')
@section('content')
<!-- ======= Breadcrumbs Section ======= -->
<div class="" style="background-color: #eee;">
    <section class="breadcrumbs shadow-sm" style="background-color: #eee;">
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
        <div class="container-fluid">
            <div class="card shadow mx-4 mb-4 border-0">
                <div class="d-sm-flex tab" style="margin: 0; padding:0">
                    <button class="tablinks btn btn-sm" id="clickButton"
                        onclick="openCity(event, 'Booking')">Booking</button>
                    <button class="tablinks btn btn-sm" onclick="openCity(event, 'Riwayat')">Riwayat Booking</button>
                </div>
                <div class="card-body tabcontent p-3" id="Booking">
                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col col-lg-2">
                                    <img src="{{asset('frontend/assets/img/hero-bg.jpg')}}" class="img-fluid rounded-3">
                                </div>
                                <div class="col">
                                    <div class="text-end">
                                        <button class="btn btn-danger delete-btn" title="Delete" value="">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                    <div class="text-start">
                                        <h4 class="card-title fw-bold">Kost Apik Juragan UI Tipe A Beji Depok</h4>
                                        <p class="text-muted mb-2"><i class="bi bi-geo-alt-fill"></i> Jalan tukad nyali
                                            blok sma
                                            6 no 64
                                            denpasar sanur, Bali , Kota Denpasar</p>
                                    </div>
                                    <div class="my-3">
                                        <span class="fw-bold">Status</span>&nbsp;
                                        <span class="badge bg-primary">Ubah</span>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <span>Hitungan Sewa</span>
                                            <p class="fw-bold">Rp1.935.000 Per Bulan</p>
                                        </div>
                                        <div class="col">
                                            <span>Tanggal Masuk</span>
                                            <p class="fw-bold">26 Agt 2022</p>
                                        </div>
                                        <div class="col">
                                            <span>Durasi Sewa</span>
                                            <p class="fw-bold">1 Bulan</p>
                                        </div>
                                        <div class="col">
                                            <a href="" class="text-success fw-bold">Lihat Detail</a>&nbsp;
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body tabcontent p-3" id="Riwayat">
                    <h1>he</h1>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@push('scripts')
<script>
    window.onload = window.onload = function () {
        document.getElementById('clickButton').click();
    }

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

</script>
@endpush
