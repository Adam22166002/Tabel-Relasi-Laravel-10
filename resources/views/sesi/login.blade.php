@extends('sesi.layout')

@section('title', 'Login - Kelompok 9')

@section('content')

<!-- Section -->
<section class="vh-100">

    <!-- Container -->
    <div class="container h-100">
        
        <!-- Row -->
        <div class="row d-flex justify-content-center align-items-center h-100">
            
            <!-- Col -->
            <div class="col-12 col-md-8 col-lg-6 col-xl-5 mt-4">
                <!-- Card -->
                <div  class="card shadow-lg p-3 mb-5 bg-body rounded" style="border: 2px solid white;">
                
                    <!-- Card body -->
                    <div class="card-body p-5">

                        <!-- Login -->
                        <div style="text-align: center;">
                          <a href="{{ url('login') }}" class="h1"><b>KELOMPOK</b>9</a>
                        </div>
                        <p class="login-box-msg" style="text-align: center;">Sign in to start your session</p>
                        
                        <!-- </Akhir login -->

                        @if ($logout = Session::get('logout'))
                        <div class="alert alert-success text-center">
                            <p>{{$logout}}</p>
                        </div>
                        @endif

                        @if ($successMessage = Session::get('success'))
                        <div class="alert alert-success text-center">
                            <p>{{$successMessage}}</p>
                        </div>

                        @elseif ($errorMessage = Session::get('error'))
                        <div class="alert alert-danger text-center">
                            <p>{{$errorMessage}}</p>
                        </div>
                        @endif

                        <!-- Form -->
                        <form method="post" action="{{url('proses_login')}}">

                            @csrf

                            <!-- Email -->
                            <div class="mb-4">
                                <label class="form-label" for="email">Email:</label>

                                <input type="email" id="email" class="form-control" name="email"
                                    value="{{old('email')}}" autocomplete="off">

                            </div>
                            <!-- </Akhir email -->

                            @if ($errors->has('email'))
                            <p style="font-size: 15px; color:red;"><i class="bi bi-exclamation-octagon-fill"></i>
                                {{ucfirst($errors->first('email'))}}
                            </p>
                            @endif

                            <!-- Password -->
                            <div class="iconPassword mb-4">
                                <label class="form-label" for="password">Password:</label>
                                <input type="password" id="password" class="form-control" name="password"
                                    value="{{old('password')}}" autocomplete="off">
                                <div class="initIcon"></div>
                            </div>
                            <!-- </Akhir password -->

                            @if ($errors->has('password'))
                            <p style="font-size: 15px; color:red;"><i class="bi bi-exclamation-octagon-fill"></i>
                                {{ucfirst($errors->first('password'))}}
                            </p>
                            @endif

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-start mb-4">
                                <input class="form-check-input" type="checkbox" name="remember" id="form1Example3" checked>
                                <label class="form-check-label ms-2" for="form1Example3"> Remember Me </label>
                            </div>
                            <!-- </Akhir checkbox -->

                            <!-- Tombol login -->
                            <div class="text-center">
                                <button class="btn btn-primary w-75 rounded-pill submit" type="submit"
                                    name="login">Sign in</button>

                                <button class="btn btn-primary w-75 rounded-pill btn-loading d-none" type="button"
                                    disabled>
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                            </div>
                            <!-- </Akhir tombol login -->

                            <hr>

                            <div class="text-center">
                                <a href="{{url('pendaftaran')}}"
                                    style="color:black; text-decoration: underline;">Register</a>
                            </div>

                        </form>
                        <!-- </Akhir form -->

                    </div>
                    <!-- </Akhir card body -->

                </div>
                <!-- </Akhir card -->

            </div>
            <!-- </Akhir col -->

        </div>
        <!-- </Akhir row -->

    </div>
    <!-- </Akhir container -->

</section>
<!-- </Akhir section -->


@endsection