@extends('layouts.app')

@section('content')
@include('partials.search-bar')
<div class="d-flex justify-content-center mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create a new Coach</h5>
            <form method="post" action=" {{route('coach.create')}} ">
                @csrf
                <div class="row">
                    <div class="col">
                        <select class="form-control" name="coach">
                            <option value="coach">Coach</option>
                        </select>
                    </div>
                    <div class="col">
                        Email:
                        <input type="email" class="form-control" placeholder="Email" name="emailCoach">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        Name:
                        <input type="text" class="form-control" placeholder="Nombre" name="nombreCoach">
                    </div>
                    <div class="col">
                        Password:
                        <input type="password" class="form-control" placeholder="Contraseña" name="passwordCoach">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        Last Name:
                        <input type="text" class="form-control" placeholder="Apellido" name="apellidoCoach">
                    </div>
                    <div class="col">
                        Sex:
                        <select class="form-control" name="sexCoach">
                            <option value="">Choose a sex</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="rather not say">Rather not say</option>
                        </select>
                    </div>
                    <div class="col">
                        <label for="">
                            Learning Way:
                            <select name="LearningWay" id="LearningWay">
                                <option value="Audio-Visual">
                                    Audio Visual
                                </option>
                                <option value="Audio">
                                    Audio
                                </option>
                                <option value="Visual">
                                   Visual
                                </option>
                            </select>
                        </label>
                    </div>
                    </div>
                    <div>
                        <label for="language" class="col-md-4 col-form-label text-md-end">{{ __('Language') }}</label>
                        <select name="lenguajesCoach" id="lenguajesCoach">
                            <option value="Python">
                            Python
                            </option>
                            <option value="Javascript">
                            Javascript
                            </option>
                            <option value="C#">
                            C#
                            </option>
                            <option value="Php">
                            Php
                            </option>
                            <option value="Java">
                            Java
                            </option>
                            <option value="Kotlin">
                            Kotlin
                            </option>
                        </select>
                        
                    </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
