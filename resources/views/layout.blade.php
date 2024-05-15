<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.datatables.net/1.13.10/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/kelompok-3.jpg') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

<div class="row">
    <div class="col">
        <nav class="navbar bg-primary border-bottom border-body mb-3 justify-content-end" data-bs-theme="dark" data-aos="fade-down"
            data-aos-duration="3000">
            <div class="container-fluid">
                <h5 class="navbar-brand"> <i class="bi bi-person-plus"></i>
                    Aplikasi CRUD - Kelompok 9 </h5>
            </div>
        </nav>
    </div>
</div>



    @yield('content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <script src="https://cdn.datatables.net/1.13.10/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.10/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.table').DataTable();

            function validateInput(inputElement, textElement) {
                if (inputElement.hasClass('is-invalid')) {
                    inputElement.on('input', function() {
                        if (inputElement.val() !== "") {
                            inputElement.removeClass('is-invalid');
                            inputElement.addClass('is-valid');
                            textElement.css('display', 'none');
                        } else {
                            inputElement.removeClass('is-valid');
                            inputElement.addClass('is-invalid');
                            textElement.css('display', 'block');
                        }
                    });
                }
            }
                validateInput($('.kode_bank'), $('.textKodeBank'));
                validateInput($('.nama_bank'), $('.textNamaBank'));
                validateInput($('.alamat'), $('.textAlamat'));
                validateInput($('.kota'), $('.textKota'));
                validateInput($('.provinsi'), $('.textProvinsi'));
                validateInput($('.kode_pos'), $('.textKodePos'));
                validateInput($('.nomor_telepon'), $('.textNomerTelepon'));
                validateInput($('.email'), $('.textEmail'));
                validateInput($('.deskripsi'), $('.textDeskripsi'));
        });
    </script>
</body>

</html>