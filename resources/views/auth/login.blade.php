<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Fly Education</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/jqvmap/jqvmap.min.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>


<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-6 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5 border">


                        <div class="brand-logo">
                            <img src="https://static.wixstatic.com/media/b73633_d70fe123ce904c00beb774c66cd71fd4~mv2.jpg/v1/fill/w_360,h_160,al_c,q_80,usm_0.66_1.00_0.01/LOGO%20IAAC.webp"
                                alt="logo">
                        </div>
                        <h4>Bienvenido a la plataforma educativa</h4>
                        <h6 class="font-weight-light mb-5">Ingresa para continuar</h6>
                        <div class="col-md-12 text-center">




                            <form class="cmxform mt-4" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group row text-center">


                                    <div class="col-md-12">
                                        <input placeholder="Ingrese Email" id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row text-center">

                                    <div class="col-md-12">
                                        <input placeholder="Ingrese password" id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class=" form-group row mb-0 mt-5 text-center">
                                    <div class="col-md-12 offset-md-12">
                                        <button type="submit" class="btn btn-primary w-50 ">
                                            {{ __('Login') }}
                                        </button>


                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>