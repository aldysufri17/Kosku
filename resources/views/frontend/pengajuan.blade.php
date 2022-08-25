@extends('frontend.layouts.app')
@section('title','Home')
@section('content')
<div class="pb-4" style="background-color: #eee;">
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
            <div class="justify-content-center">
                <div class="data-penyewa">
                    <div class="d-flex justify-content-between total font-weight-bold mt-3">
                        <h4 class="fw-bold">Data Penyewa</h4>
                        <a href=""><span class="badge bg-primary">Ubah</span></a>
                    </div>
                    <div class="">
                        <span class="fw-bold">Nama Penyewa</s>
                            <p class="text-muted">Aldy Sufriyanto</p>
                    </div>
                    <div class="">
                        <span class="fw-bold">Nomor Hp</s>
                            <p class="text-muted">0896163131312</p>
                    </div>
                    <div class="">
                        <span class="fw-bold">Jenis Kelamin</s>
                            <p class="text-muted">Laki-Laki</p>
                    </div>
                    <div class="">
                        <span class="fw-bold">Pekerjaan</s>
                            <p class="text-muted">Mahasiswa</p>
                    </div>
                </div>
                <hr>
                <div class="data-priadi">
                    <h4 class="fw-bold">Dokumen persyaratan masuk kos</h4>
                    <span>Mohon melengkapi dokumen berikut yang diperlukan pemilik kos untuk verifikasi.</span>
                    <div class="form-group mt-4">
                        <div class="ktp">
                            <label><span style="color:red;">*</span> Foto KTP</label>
                            <input autocomplete="off" type="file"
                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                id="exampleName" placeholder="Nama" name="name" value="{{ old('name') }}">
                        </div>
                        <div class="ktp mt-2">
                            <label><span style="color:red;">*</span> Foto Kartu Keluarga</label>
                            <input autocomplete="off" type="file"
                                class="form-control form-control-user @error('name') is-invalid @enderror"
                                id="exampleName" placeholder="Nama" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="data-priadi">
                    <div class="d-flex justify-content-between total font-weight-bold mt-3">
                        <h4 class="fw-bold">Durasi dan Biaya sewa kos</h4>
                        <a href=""><span class="badge bg-primary">Ubah</span></a>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <span>Rp 1.260.000/ bulan</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <span>Rp 1.260.000/ 3 bulan</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <span>Rp 1.260.000/ 6 bulan</span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <span>Rp 1.260.000/ setahun</span>
                        </label>
                    </div>
                    <div class="d-flex justify-content-between total font-weight-bold mt-3 fw-bold">
                        <span>Durasi yang dipilih</span><span>Sebulan</span>
                    </div>
                </div>
                <hr>
                <div class="data-priadi">
                    <div class="d-flex justify-content-between total font-weight-bold mt-3 fw-bold">
                        <span>Total Biaya</span><span>Rp 1.260.000</span>
                    </div>
                </div>
                <hr>
                <div class="data-priadi">
                    <div class="d-flex justify-content-between total font-weight-bold mt-3">
                    <h4 class="fw-bold">Tanggal mulai ngekos</h4>
                    <a href=""><span class="badge bg-primary">Ubah</span></a>
                    </div>
                    <span>Jumat, 26 Agustus 2022</span>
                </div>
                <div class="mt-4">
                    <button class="btn btn-success p-3" style="width:100%;">Ajukan Sewa</button>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
