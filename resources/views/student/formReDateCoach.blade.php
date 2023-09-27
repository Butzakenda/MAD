@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Re-Schedule an Appointment</h5>
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Coach" name="">
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Fecha" name="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <input type="time" class="form-control" placeholder="Hora Inicio" name="">
                    </div>
                    <div class="col">
                        <input type="time" class="form-control" placeholder="Hora Finalizacion" name="">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
