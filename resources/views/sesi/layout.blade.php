<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/kelompok-3.jpg') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background-color: white;
        }

        .iconPassword {
            position: relative;
        }

        #togglePassword {
            position: absolute;
            top: 50px;
            right: 15px;
            font-size: 20px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        .input-with-icon {
            position: relative;
        }

        .input-with-icon input[type="password"] {
            padding-right: 40px;
        }

        .input-with-icon i.initIcon {
            position: absolute;
            top: 50%;
            right: 10px;
            font-size: 20px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    @php
    $path = Request::path()
    @endphp

    @switch($path)
    @case('login')
    <script>
        let password = document.getElementById("password");
        const initIcon = document.querySelector(".initIcon");
        let createIconPassword = document.createElement("i");
        let btnsubmit = document.querySelector('.submit');
        let btnloading = document.querySelector('.btn-loading');
        let Form = document.getElementsByTagName('form')[0];

        createIconPassword.className = "bi-eye-slash-fill";
        createIconPassword.id = "togglePassword";

        password.addEventListener("input", function() {
            if (password.value === "") {
                initIcon.innerHTML = "";
            } else {
                initIcon.appendChild(createIconPassword);
            }
        });

        createIconPassword.addEventListener("click", function() {
            createIconPassword.classList.toggle("bi-eye-slash-fill");
            createIconPassword.classList.toggle("bi-eye-fill");

            if (createIconPassword.classList.contains("bi-eye-fill")) {
                password.type = "text";
            } else {
                password.type = "password";
            }
        });

        form.addEventListener('submit', function() {

            btnSubmit.classList.toggle('d-none');
            btnLoading.classList.toggle('d-none');

        });
    </script>
    @break

    @case('pendaftaran')
    <script>
        let passwordFields = document.querySelectorAll(".password");
const initIcons = document.querySelectorAll(".initIcon");
let btnSubmit = document.querySelector('.submit');
let btnLoading = document.querySelector('.btn-loading');
let form = document.getElementsByTagName('form')[0];

passwordFields.forEach((passwordField, index) => {
    let createIconPassword = document.createElement("i");
    createIconPassword.className = "bi-eye-slash-fill";
    createIconPassword.id = "togglePassword" + index;

    passwordField.addEventListener("input", function() {
        if (passwordField.value === "") {
            initIcons[index].innerHTML = "";
        } else {
            initIcons[index].appendChild(createIconPassword);
        }
    });

    createIconPassword.addEventListener("click", function() {
        createIconPassword.classList.toggle("bi-eye-slash-fill");
        createIconPassword.classList.toggle("bi-eye-fill");

        if (createIconPassword.classList.contains("bi-eye-fill")) {
            passwordFields[index].type = "text";
        } else {
            passwordFields[index].type = "password";
            }
        });
    });

    form.addEventListener('submit', function() {
        btnSubmit.classList.toggle('d-none');
        btnLoading.classList.toggle('d-none');
    });
    </script>
    @break

    @endswitch
    <!-- Tambahkan garis biru di atas form -->
    <hr class="form-divider">

</body>

</html>
