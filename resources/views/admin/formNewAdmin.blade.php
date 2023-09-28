@extends('layouts.app')

@section('content')
@include('partials.search-bar')
<div class="d-flex justify-content-center mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create a new Coach</h5>
            <form method="post" action=" {{route('admin.create')}} ">
                @csrf
                <div class="row">
                    <div class="col">
                        <select class="form-control" name="coach">
                            <option value="coach">Administrador</option>
                        </select>
                    </div>
                    <div class="col">
                        Email:
                        <input type="email" class="form-control" placeholder="Email" name="emailAdmin">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        Name:
                        <input type="text" class="form-control" placeholder="Nombre" name="nombreAdmin">
                    </div>
                    <div class="col">
                        Password:
                        <input type="password" class="form-control" placeholder="Contraseña" name="passwordAdmin">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        Last Name:
                        <input type="text" class="form-control" placeholder="Apellido" name="apellidoAdmin">
                    </div>
                    <div class="col">
                        Sex:
                        <select class="form-control" name="sexAdmin">
                            <option value="">Choose a sex</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="rather not say">Rather not say</option>
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
