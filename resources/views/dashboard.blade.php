@extends('layout')

@section('title', 'Data Bank')

@section('content')

<div class="container">
    <div class="row" class="card shadow-lg p-3 mb-5 bg-body rounded" >
        <div class="col">

        @if($welcomeMessage = Session::get('welcome'))
            <script>
                Swal.fire({
                title: "Berhasil Login",
                text: "{{ $welcomeMessage }}",
                icon: "success"
                });
            </script>

            @elseif($successMessage = Session::get('success'))
            <script>
                Swal.fire({
                title: "Berhasil",
                text: "{{ $successMessage }}",
                icon: "success"
                })
            </script>
            @endif

            <div class="card mb-3 mt-3">
                <div class="card-header">
                    <h4><i class="fas fa-table me-1"></i> Data Bank</h4>
                    <div class="mt-4">
                        <a href="{{ route('data.create')}}" class="btn btn-success mb-3">
                            <i class="bi bi-plus-square"></i> Tambah
                        </a>

                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            class="btn btn-danger mb-3 mx-3">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center">
                            <thead class="table-secondary">
                        <tr>
                            <th>No</th>
                            <th>Kode Bank</th>
                            <th>Nama Bank</th>
                            <th>Jenis Bank</th>
                            <th>Alamat</th>
                            <th>Kota</th>
                            <th>Provinsi</th>
                            <th>Kode Pos</th>
                            <th>Nomer Telepon</th>
                            <th>Email</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                            
                        </tr>
                        </thead>
                              <tbody>
                                @php
                                $no = 1;
                                @endphp

                                    @foreach ($data as $item)
                                      <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $item->kode_bank }}</td>
                                        <td>{{ $item->nama_bank}}</td>
                                        <td>{{ $item->jenisBank->nama_jenis }}</td>
                                        <td>{{ $item->alamat}}</td>
                                        <td>{{ $item->kota}}</td>
                                        <td>{{ $item->provinsi}}</td>
                                        <td>{{ $item->kode_pos}}</td>
                                        <td>{{ $item->nomer_telepon}}</td>
                                        <td>{{ $item->email}}</td>
                                        <td>{{ $item->deskripsi}}</td>
                                        <td>
                                        <div class="row">
                                            <div class="col mt-2">
                                                    <a href="{{ route('data.show', $item->kode_bank) }}" 
                                                    class="btn btn-info btn-sm text-white"><i
                                                     class="bi bi-eye"></i>
                                                    Lihat</a>
                                            </div>
                                            <br>
                                            <div class="col mt-2">
                                                    <a href="{{ route('data.edit', $item->kode_bank) }}"
                                                     class="btn btn-primary btn-sm text-white"><i
                                                      class="bi bi-arrow-repeat"></i>
                                                    Update</a>
                                            </div>
                                            <br>
                                            <div class="col mt-2">
                                                    <form action="{{ route('data.destroy', $item->kode_bank) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm text-white"
                                                            onclick="return confirm('Apakah kamu yakin ingin menghapus data bank ini?')"><i
                                                                class="bi bi-trash-fill"></i>
                                                            Delete
                                                        </button>
                                                    </form>
                                            </div>
                                        </div>
                                        </td>
                                      </tr>
                                  @endforeach
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Pilih "Logout" untuk keluar dari aplikasi!</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <a href="{{url('logout')}}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>
@endsection