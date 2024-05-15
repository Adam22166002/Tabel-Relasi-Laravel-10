@extends('layout')

@section('title', 'Detail Data Bank')

@section('content')

<div class="container">

   <h4 class="mb-3"> <center>Form - Detail Data Bank</center></h4>

    <form method="post">
        @csrf

        <div class="row mt-4">
            <div class="col">
                <label for="kode_bank" class="fst-normal mb-3"> Kode bank :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-list-ol"></i></span>
                    <input type="text" class="form-control kode_bank" id="kode_bank" name="kode_bank"
                        autocomplete="off" value="{{ $data->kode_bank }}" disabled>
                </div>
                <label for="nama_bank" class="fst-normal mb-3"> Nama Bank :</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-bank2"></i></span>
                                    <input type="text" class="form-control nama_bank" id="nama_bank" name="nama_bank"
                                        autocomplete="off" value="{{ $data->nama_bank }}" disabled>
                                </div>
                <label for="nama_bank" class="fst-normal mb-3"> Jenis Bank :</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="bi bi-bank"></i></span>
                                    <input type="text" class="form-control jenis_bank" id="jenis_bank" name="jenis_bank"
                                        autocomplete="off" value="{{ $data->jenisBank->nama_jenis }}" disabled>
                                </div>
                <label for="alamat" class="fst-normal mb-3"> Alamat :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-house-door-fill"></i></span>
                    <input type="text" class="form-control w-50 alamat" id="alamat" name="alamat" autocomplete="off"
                        value="{{ $data->alamat }}" disabled>
                </div>

                <label for="kota" class="fst-normal mb-3"> Kota :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-building-fill"></i></span>
                    <input type="text" class="form-control w-50 kota" id="kota" name="kota" autocomplete="off"
                        value="{{ $data->kota }}" disabled>
                </div>

                <label for="provinsi" class="fst-normal mb-3"> Provinsi :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-buildings-fill"></i></span>
                    <input type="text" class="form-control w-50 provinsi" id="provinsi" name="provinsi"
                        autocomplete="off" value="{{ $data->provinsi }}" disabled>
                </div>

                <label for="kode_pos" class="fst-normal mb-3"> Kode Pos :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-postcard-fill"></i></span>
                    <input type="number" class="form-control w-50 kode_pos" id="kode_pos" name="kode_pos"
                        autocomplete="off" value="{{ $data->kode_pos }}" disabled>
                </div>

                <label for="nomer_telepon" class="fst-normal mb-3"> Nomer Telepon :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                    <input type="number" class="form-control w-50 nomer_telepon" id="nomer_telepon" name="nomer_telepon"
                        autocomplete="off" value="{{ $data->nomer_telepon }}" disabled>
                </div>

                <label for="email" class="fst-normal mb-3"> Email :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                    <input type="email" class="form-control w-50 email" id="email" name="email" autocomplete="off"
                        value="{{ $data->email }}" disabled>
                </div>

                <label for="deskripsi" class="fst-normal mb-3"> Deskripsi :</label>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person-lines-fill"></i></span>
                    <input type="text" class="form-control w-50 deskripsi" id="deskripsi" name="deskripsi" autocomplete="off"
                        value="{{ $data->deskripsi }}" disabled>
                </div>
            </div>
        </div>
        
        <div class="modal-footer mt-3">
            <a href="{{url('/data')}}" class="btn btn-danger mx-3 mb-3">Back</a>
        </div>
    </form>
</div>
@endsection