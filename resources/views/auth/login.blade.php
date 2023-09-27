@extends('layouts.app')

@section('content')
@include('partials.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <!--la generacion del style en la card es por parte de la inteligencia artificial chatgpt-->
            <div class="card w-50 h-50" style="position: absolute;left: 50%;top: 50%;transform: translate(-50%, -50%);">
                <center>
                    <div class="card-header">{{ __('Login') }}</div>
                </center>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email:') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Escriba su correo aqui" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña:') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Escriba su contraseña">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <br>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-outline-dark">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            <div class="col-md-8 offset-md-4">
                                <br>
                                <label for="">Si aún no tienes una cuenta, regístrate</label>
                                <a id="btnSingUp" href="{{ route('register') }}" class="btn btn-outline-primary mr-auto">{{ __('Sing up') }}</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection