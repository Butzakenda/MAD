@extends('layouts.app')
@include('partials.nav')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="d-flex justify-content-center mt-2 mb-3">
                            <h1>Register</h1>
                        </div>

                        <div class="row align-items">
                            <div class="col-md-3">
                                <!-- INPUT NAME -->
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- INPUT LAST NAME -->
                                <div class="row mb-3">
                                    <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                        @error('lastname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- INPUT SEX SELECT -->
                                <div class="row mb-3">
                                    <label for="sex" class="col-md-4 col-form-label text-md-end">{{ __('Sex') }}</label>


                                    <div class="col-md-6">
                                        <select class="form-select form-control @error('sex') is-invalid @enderror" aria-label="Default select example" required autofocus>
                                            <option selected>Select your sex</option>
                                            <option value="1">Male</option>
                                            <option value="2">Female</option>
                                            <option value="3">Prefer not to say</option>
                                        </select>
                                        <!-- <input id="sex" type="select" class="form-control @error('sex') is-invalid @enderror" name="sex" value="{{ old('sex') }}" required autocomplete="sex" autofocus> -->

                                        @error('sex')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <!-- INPUT CARRER -->
                                <div class="row mb-3">
                                    <label for="carrer" class="col-md-4 col-form-label text-md-end">{{ __('Carrer') }}</label>

                                    <div class="col-md-6">
                                        <input id="lastname" type="text" class="form-control @error('carrer') is-invalid @enderror" name="carrer" value="{{ old('carrer') }}" required autocomplete="carrer" autofocus>

                                        @error('carrer')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- INPUT EMAIL ADDRESS -->
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- INPUT PASSWORD -->
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- INPUT CONFIRM PASSWORD -->
                                <div class="row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">

                                <!-- INPUT CHECKBOX  -->
                                <div>
                                    <label for="language" class="col-md-4 col-form-label text-md-end">{{ __('Language') }}</label>

                                    <div class="col-md-4">
                                        <label><input type="checkbox" id="cbox1" value="1" /> Python</label><br />
                                        <label><input type="checkbox" id="cbox2" value="1" /> Javascript</label><br />
                                        <label><input type="checkbox" id="cbox3" value="1" /> C#</label><br />
                                        <label><input type="checkbox" id="cbox4" value="1" /> Php</label><br />
                                        <label><input type="checkbox" id="cbox5" value="1" /> Java</label><br />
                                        <label><input type="checkbox" id="cbox6" value="1" /> Kotlin</label><br />
                                        <label><input type="checkbox" id="cbox7" value="1" /> Otro</label><br />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- INPUT LEARNING WAY -->
                                <div>
                                    <label for="learning-way" class="col-md-6 col-form-label text-md-end">{{ __('Learning Way') }}</label>

                                    <div class="col-md-6">
                                        <label><input type="checkbox" id="cbox1" value="1" /> Audio-Visual</label><br />
                                        <label><input type="checkbox" id="cbox1" value="1" /> Audio</label><br />
                                        <label><input type="checkbox" id="cbox1" value="1" /> Visual</label><br />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            <div class="align-top">
                                <h6>Already have an account? Log In</h6>
                            </div>
                            <div class="align-bottom">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Log In') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
