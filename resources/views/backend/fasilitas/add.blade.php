@extends('backend.layouts.app')
@section('title','Tambah Fasilitas')
@section('content')
<x-page-form page='create' route="fasilitas.index" title="Fasilitas">
    <form action="{{route('fasilitas.store')}}" method="post">
        @csrf
        <div class="form-group row">

            {{-- Name --}}
            <x-form-input label="Nama" type="text" required="required" name="nama"></x-form-input>

            {{-- Status --}}
            <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                <span style="color:red;">*</span>Tampilkan</label>
                <select class="form-control form-control-user @error('status') is-invalid @enderror"
                    name="status">
                    <option selected disabled>Tampilkan</option>
                    <option value="1" selected>Ya</option>
                    <option value="0">Tidak</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="card-footer text-right border-0">
            <a class="btn btn-danger mr-3" href="{{ route('fasilitas.index') }}">Batal</a>
            <x-tabel-button type="submit" color="primary" title="Simpan"></x-tabel-button>
        </div>
    </form>
</x-page-form>
@endsection
