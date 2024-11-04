@extends('layouts.app')

@section('content')
    <section class="ezy__signin6 light d-flex">
        <div class="container">
            <div class="row justify-content-between h-100
            ">
                <div class="col-lg-6">
                    <div class="ezy__signin6-bg-holder h-100" style="background-image:url('../img/carros.jpg')">
                    </div>
                </div>
                <div class="col-lg-5 py-5">
                    <div class="row align-items-center h-100" style="background-color: white; border-radius: 10px">
                        <div class="col-12">
                            <div class="card ezy__signin6-form-card">
                                <div class="card-body p-0">

                                    <img id="img_index" src="{{ asset('../img/aguamerca_logo.png') }}" alt=""
                                        srcset="">
                                    <br>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <h1 class="h2" style="text-align: center">AGUAS DE MÉRIDA, C.A.</h1>
                                        <p class="mb-4 lead" style="text-align: center">Sistema de Gestión de Vehículos</p>
                                        <div class="form-group mb-4 mt-2">
                                            <label for="email" class="mb-2">Correo Electronico</label>

                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-2 mt-2">
                                            <label for="password" class="mb-2">Contraseña</label>

                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="remember-me" checked />
                                                <label class="form-check-label" for="remember-me"> Recordar
                                                    Contraseña</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn ezy__signin6-btn-submit w-100">Ingresar</button>
                                        {{-- <button class="btn w-100">No tienes cuenta? </button> --}}


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <style>
        .ezy__signin6 {
            /* Bootstrap variables */
            --bs-body-color: #333b7b;
            --bs-body-bg: rgb(255, 255, 255);

            /* Easy Frontend variables */
            --ezy-theme-color: rgb(13, 110, 253);
            --ezy-theme-color-rgb: 13, 110, 253;
            --ezy-form-card-bg: #ffffff;
            --ezy-form-card-shadow: none;

            background-color: var(--bs-body-bg);
            padding: 3.2%;
        }

        /* Gray Block Style */
        .gray .ezy__signin6,
        .ezy__signin6.gray {
            /* Bootstrap variables */
            --bs-body-bg: rgb(246, 246, 246);

            /* Easy Frontend variables */
            --ezy-form-card-bg: #f6f6f6;
            --ezy-form-card-shadow: none;
        }

        /* Dark Gray Block Style */
        .dark-gray .ezy__signin6,
        .ezy__signin6.dark-gray {
            /* Bootstrap variables */
            --bs-body-color: #ffffff;
            --bs-body-bg: rgb(30, 39, 53);
            --bs-dark-rgb: 255, 255, 255;

            /* Easy Frontend variables */
            --ezy-form-card-bg: #253140;
            --ezy-form-card-shadow: none;
        }

        /* Dark Block Style */
        .dark .ezy__signin6,
        .ezy__signin6.dark {
            /* Bootstrap variables */
            --bs-body-color: #ffffff;
            --bs-body-bg: rgb(11, 23, 39);
            --bs-dark-rgb: 255, 255, 255;

            /* Easy Frontend variables */
            --ezy-form-card-bg: #162231;
            --ezy-form-card-shadow: none;
        }

        .ezy__signin6 .container {
            min-height: 80vh;
        }

        .ezy__signin6-heading {
            font-weight: bold;
            font-size: 25px;
            line-height: 25px;
            color: var(--bs-body-color);
        }

        .ezy__signin6-bg-holder {
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
            border-radius: 35px;
        }

        .ezy__signin6-form-card {
            background-color: transparent;
            border: none;
            box-shadow: var(--ezy-form-card-shadow);
            /*border-radius: 15px;*/
        }

        .ezy__signin6-form-card * {
            color: var(--bs-body-color);
        }

        .ezy__signin6 .form-control {
            min-height: 48px;
            line-height: 40px;
            border-color: transparent;
            background: rgba(163, 190, 241, 0.14);
            border-radius: 10px;
            color: var(--bs-body-color);
        }

        .ezy__signin6 .form-control:focus {
            border-color: var(--ezy-theme-color);
            box-shadow: none;
        }

        .ezy__signin6-btn-submit {
            padding: 12px 30px;
            background-color: #333b7b;
            color: #ffffff;
        }

        .ezy__signin6-btn-submit:hover {
            color: #ffffff;
        }

        .ezy__signin6-btn {
            padding: 12px 30px;
        }

        .ezy__signin6-btn,
        .ezy__signin6-btn * {
            color: #ffffff;
        }

        .ezy__signin6-btn:hover {
            color: #ffffff;
        }

        .ezy__signin6-or-separator {
            position: relative;
        }

        .ezy__signin6-or-separator hr {
            border-color: var(--bs-body-color);
            opacity: 0.15;
        }

        .ezy__signin6-or-separator span {
            background-color: var(--ezy-form-card-bg);
            color: var(--bs-body-color);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%, -50%, 0);
            opacity: 0.8;
        }
    </style>
@endsection
