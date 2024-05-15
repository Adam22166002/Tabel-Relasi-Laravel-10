@extends('layout')

@section('title', 'Tambah Data Bank')

@section('content')

<div class="container">

   <h4 class="mb-3"> <center>Form - Tambah Data Bank</center></h4>

    @if($errorMessage = Session::get('error'))
    <script>
        Swal.fire({
        title: "Gagal",
        text: "{{ $errorMessage }}",
        icon: "error"
        });
    </script>
    @endif

    <form method="post" id="store" action="{{ route('data.store') }}">
        @csrf

        <div class="row mt-4">
            <div class="col">
                <label for="kode_bank" class="fst-normal mb-3">Masukan Kode Bank :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-list-ol"></i></i></span>
                    <input type="number" class="form-control @error('kode_bank') is-invalid @enderror" 
                    name="kode_bank" value="{{ old('kode_bank') }}">
                </div>

                @if ($errors->has('kode_bank'))
                <p class="textKodeBank" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('kode_bank'))}}
                </p>
                @endif
                <label for="nama_bank" class="fst-normal mb-3">Masukan Nama Bank :</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-bank2"></i></span>
                                    <input type="text" class="form-control @error('nama_bank') is-invalid @enderror" 
                                    name="nama_bank" rows="10" value="{{ old('nama_bank') }}">
                                </div>

                                @if ($errors->has('nama_bank'))
                                <p class="textNamaKaryawanama" style="font-size: 15px; color:red;">
                                    {{ucfirst($errors->first('nama_bank'))}}
                                </p>
                                @endif
                <label for="jenis_bank" class="fst-normal mb-3">Masukan Jenis Bank :</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-bank"></i></span>
                                    <select class="form-select @error('jenis_bank') is-invalid @enderror" name="jenis_bank" id="jenis_bank" autocomplete="off">
                                        <option value="">-Pilih Jenis Bank-</option>
                                        @foreach($jenis as $item)
                                            <option value="{{ $item->kode_jenis }}">{{ $item->nama_jenis }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if ($errors->has('jenis_bank'))
                                <p class="text-danger" style="font-size: 15px;">
                                    {{ ucfirst($errors->first('jenis_bank')) }}
                                </p>
                                @endif

                <label for="alamat" class="fst-normal mb-3">Masukan Alamat :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-house-door-fill"></i></span>
                    <input type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" rows="100" value="{{ old('alamat') }}">
                </div>

                @if ($errors->has('alamat'))
                <p class="textAlamat" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('alamat'))}}
                </p>
                @endif

                <label for="kota" class="fst-normal mb-3">Masukan Kota :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-building-fill"></i></span>
                    <input type="text" class="form-control @error('kota') is-invalid @enderror" name="kota" rows="20" value="{{ old('kota') }}">
                </div>

                @if ($errors->has('kota'))
                <p class="textKota" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('kota'))}}
                </p>
                @endif

                <label for="provinsi" class="fst-normal mb-3">Masukan Provinsi :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-buildings-fill"></i></span>
                    <input type="text" class="form-control @error('provinsi') is-invalid @enderror" name="provinsi" rows="20" value="{{ old('provinsi') }}">
                </div>

                @if ($errors->has('provinsi'))
                <p class="textProvinsi" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('provinsi'))}}
                </p>
                @endif

                <label for="kode_pos" class="fst-normal mb-3">Masukan Kode Pos :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-postcard-fill"></i></span>
                    <input type="number" class="form-control @error('kode_pos') is-invalid @enderror" name="kode_pos" rows="5" value="{{ old('kode_pos') }}">
                </div>

                @if ($errors->has('kode_pos'))
                <p class="textKodePos" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('kode_pos'))}}
                </p>
                @endif

                <label for="nomor_telepon" class="fst-normal mb-3">Masukan Nomer Telepon :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input type="number" class="form-control @error('nomer_telepon') is-invalid @enderror" name="nomer_telepon" rows="10" value="{{ old('nomer_telepon') }}">
                </div>

                @if ($errors->has('nomor_telepon'))
                <p class="textNoTelepon" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('nomor_telepon'))}}
                </p>
                @endif

                <label for="email" class="fst-normal mb-3">Masukan Email :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" rows="100" value="{{ old('email') }}">
                </div>

                @if ($errors->has('email'))
                <p class="textEmail" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('email'))}}
                </p>
                @endif

                <label for="deskripsi" class="fst-normal mb-3">Masukan Deskripsi :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-lines-fill"></i></span>
                    <input type="textarea" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ old('deskripsi') }}">
                </div>

                @if ($errors->has('deskripsi'))
                <p class="textDeskripsi" style="font-size: 15px; color:red;">
                    {{ucfirst($errors->first('deskripsi'))}}
                </p>
                @endif

            </div>
        </div>

        <div class="modal-footer mt-3 mb-3">
            <a href="{{url('/data')}}" class="btn btn-danger mx-3">Back</a>
            <button type="submit" class="btn btn-md btn-primary">SAVE</button>
        </div>
    </form>
</div>
@endsection