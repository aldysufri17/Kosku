@extends('backend.layouts.app')
@section('title','Edit Peraturan')
@section('content')
<x-page-form page='edit' route="peraturan.index" title="Peraturan">
    <form action="{{route('peraturan.update', $peraturan->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">

            {{-- Name --}}
            <x-form-input label="Nama" type="text" required="required" value="{{$peraturan->nama}}" name="nama">
            </x-form-input>

            {{-- Status --}}
            <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                <span style="color:red;">*</span>Tampilkan</label>
                <select class="form-control form-control-user @error('status') is-invalid @enderror" name="status">
                    <option selected disabled>Select Status</option>
                    <option value="1" {{$peraturan->status == 1 ? 'selected' : ''}}>
                        Ya</option>
                    <option value="0" {{$peraturan->status == 0 ? 'selected' : ''}}>
                        Tidak</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

        </div>
        <div class="card-footer text-right border-0">
            <a class="btn btn-danger mr-3" href="{{ route('peraturan.index') }}">Batal</a>
            <x-tabel-button type="submit" color="primary" title="Simpan"></x-tabel-button>
        </div>
    </form>
</x-page-form>
@endsection
