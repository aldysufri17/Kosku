@extends('backend.layouts.app')
@section('title','Daftar Pengguna Kamar')
@section('content')
<x-page-index title="Pengguna Kamar" create="0" buttonLabel="Tambah pengguna" routeCreate="transaksi.create">
    @if ($pengguna->IsNotEmpty())
    <table id="dataTable" class="table table-striped table-borderless responsive nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Nama</th>
                <th>Nomor Kamar</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Selesai</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pengguna as $key=>$data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->kode}}</td>
                <td>{{$data->user->name}}</td>
                <td>{{$data->kamar->nomer}}</td>
                <td>{{$data->tgl_mulai}}</td>
                <td>{{$data->tgl_selesai}}</td>
                <td>
                    <div class="table-actions btn-group">
                        <a href="{{route('transaksi.show', $data->id)}}" class="table-action btn btn-info mr-2" data-toggle="tooltip" title="Detail">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{route('transaksi.status', [$data->id, 4])}}" class="table-action btn btn-success mr-2"
                            data-toggle="tooltip" title="Konfimasi Pembayaran">
                            Setuji Perpanjang
                        </a>
                        <a href="{{route('transaksi.status', [$data->id, 2])}}" class="table-action btn btn-danger mr-2"
                            data-toggle="tooltip" title="Setujui Pengajuan">
                            Tolak Perpanjang
                        </a>
                        <a href="{{route('transaksi.status', [$data->id, 2])}}" class="table-action btn btn-success mr-2"
                            data-toggle="tooltip" title="Setujui Pengajuan">
                            Konfirmasi Pembayaran
                        </a>
                        <button class="btn btn-primary bukti-btn" value="{{$data->foto_pembayaran}}">Cek Bukti Pembayaran</button>
                        <input type="text" hidden id="biaya" value="{{$data->biaya}}">
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @include('backend.transaksi.booking.transaksi-modal')
    @else
    <div class="align-items-center bg-light p-3 border-secondary rounded">
        <span class="">Oops!</span><br>
        <p><i class="fas fa-info-circle"></i> Belum Terdapat Data transaksi</p>
    </div>
    @endif
</x-page-index>
@endsection
