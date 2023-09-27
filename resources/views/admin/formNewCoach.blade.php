@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Create a new Coach</h5>
            {{Auth::user()->name}}
            <form method="post" action=" {{route('coach.create')}} ">
                @csrf
                <div class="row">
                    <div class="col">
                        <select class="form-control" name="coach">
                            <option value="coach">Coach</option>
                        </select>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" placeholder="Email" name="emailCoach">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombreCoach">
                    </div>
                    <div class="col">
                        <input type="password" class="form-control" placeholder="Contraseña" name="passwordCoach">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido" name="apellidoCoach">
                    </div>
                    <div class="col">
                        <select class="form-control" name="sexCoach">
                            <option value="">Sex</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                            <option value="rather not say">Rather not say</option>
                        </select>
                    </div>
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
