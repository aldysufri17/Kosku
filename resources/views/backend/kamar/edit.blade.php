@extends('backend.layouts.app')
@section('title','Edit Kamar')
@section('content')
<x-page-form page='edit' route="kamar.index" title="Kamar">
    <form action="{{route('kamar.update', $kamar->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row mb-0">

            {{-- Name --}}
            <x-form-input label="Nomor Pintu" type="text" required="required" name="nomer" value="{{$kamar->nomer}}">
            </x-form-input>

            {{-- Name --}}
            <x-form-input label="Ukuran" type="text" required="required" name="ukuran" value="{{$kamar->ukuran}}">
            </x-form-input>

            {{-- Status --}}
            <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                <span style="color:red;">*</span>Tampilkan</label>
                <select class="form-control form-control-user @error('tampil') is-invalid @enderror" name="tampil">
                    <option value="1" {{$kamar->tampil == 1 ? 'selected':''}}>Ya</option>
                    <option value="0" {{$kamar->tampil == 0 ? 'selected':''}}>Tidak</option>
                </select>
                @error('tampil')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {{-- Status --}}
            <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                <span style="color:red;">*</span>Status</label>
                <select class="form-control form-control-user @error('status') is-invalid @enderror" name="status">
                    <option value="0" selected>Kosong</option>
                    <option value="1">Dihuni</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            {{-- Status --}}
            <div class="col-sm-6 mb-3 mt-3 mb-sm-0">
                <span style="color:red;">*</span>Harga</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Rp.</span>
                    </div>
                    <input type="text" id="uang" class="form-control @error('harga') is-invalid @enderror" name="harga"
                        value="{{$kamar->harga}}"
                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                    <div class="input-group-append">
                        <span class="input-group-text">/Bulan</span>
                    </div>
                </div>
                @error('harga')
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        <div class="form-imgaes mb-3">
            <span style="color:red;">*</span>Foto</label>
            <div class="mt-2">
                <div class="row">
                    @foreach ($foto as $data)
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('images/kamar/'. $data)}}" class="img-fluid">
                            <div class="card-body mt-0">
                                <div class="">
                                    <label>Ubah Gambar</label>
                                    <input type="file" class="form-control" name="updates[]" id="">
                                </div>
                                <div class="mt-2">
                                </div>
                            </div>
                            {{-- <div class="card-footer text-center">
                                <button class="btn btn-danger" style="width: 100%"><i
                                        class="fas fa-trash"></i>Hapus</button>
                            </div> --}}
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="input-group hdtuto control-group d-flex">
                <input type="file" placeholder="Nilai Penggunaan" name="foto[]"
                    class="myfrm form-control @error('foto') is-invalid @enderror" value="{{ old('foto[]') }}">
                @error('foto')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <button class="btn btn-success" type="button">Tambah Foto Lain</button>
            </div>
            <div class="clone"></div>
        </div>

        <div class="form-deskripsi mb-3">
            <span style="color:red;">*</span>Deskripsi</label>
            <textarea class="ckeditor form-control" placeholder="Tambahkan Deskripsi Kamar" name="deskripsi" rows="10"
                style="height:100%;">{{$kamar->deskripsi}}</textarea>
        </div>
        <div class="card-footer text-right border-0">
            <a class="btn btn-danger mr-3" href="{{ route('kamar.index') }}">Batal</a>
            <x-tabel-button type="submit" color="primary" title="Simpan"></x-tabel-button>
        </div>
    </form>
</x-page-form>
@endsection

@push('scripts')
<script>
    $("#rmv").hide();
    $(".btn-success").click(function () {
        $(".clone").append(`
                <div class="hide mt-3">
                        <div class="input-group hdtuto control-group lst increment">
                            <div class="input-group hdtuto control-group d-flex">
                        <input type="file" placeholder="Nilai Penggunaan" name="foto[]"
                            class="myfrm form-control @error('foto') is-invalid @enderror"
                            value="{{ old('foto[]') }}">
                        @error('foto')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <button class="btn btn-danger" id="rmv" type="button"><i
                                    class="fldemo glyphicon glyphicon-remove"></i> Hapus Form</button>
                        </div>
                    </div>
                </div>
            `)
    });
    $("body").on("click", ".btn-danger", function () {
        $(this).parents(".hdtuto").remove();
    });

</script>

<script>
    $(function () {
        $("#uang").keyup(function (e) {
            $(this).val(format($(this).val()));
        });
    });
    var format = function (num) {
        var str = num.toString().replace("", ""),
            parts = false,
            output = [],
            i = 1,
            formatted = null;
        if (str.indexOf(".") > 0) {
            parts = str.split(".");
            str = parts[0];
        }
        str = str.split("").reverse();
        for (var j = 0, len = str.length; j < len; j++) {
            if (str[j] != ",") {
                output.push(str[j]);
                if (i % 3 == 0 && j < (len - 1)) {
                    output.push(",");
                }
                i++;
            }
        }
        formatted = output.reverse().join("");
        return ("" + formatted + ((parts) ? "." + parts[1].substr(0, 2) : ""));
    };

</script>
@endpush
