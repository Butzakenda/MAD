@extends('layouts.app')

@section('content')
@include('partials.search-bar')
<div class="d-flex justify-content-center mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Schedule an Appointment</h5>
            <form method="POST" action="{{route('appoinment.create', $CoachAppointment->IdCoach)}}">
                @csrf
                <div class="row">
                    <div class="col">
                        <p>Nombre: {{$CoachAppointment->Nombres}} </p>
                    </div>
                    <div class="col">
                        <p>Método de enseñanza: {{$CoachAppointment->LearningWay}} </p>
                    </div>
                    <div class="col">
                        Duración: <input type="number" name="Duracion" id="Duracion">
                    </div>
                    
                </div>
                <div class="row mt-3">
                    <div class="col">
                        Fecha y Hora Inicio<input type="datetime-local" class="form-control" placeholder="Fecha" name="FechaHoraInicio">
                    </div>
                    <div class="col">
                        Fecha y Hora Fin<input type="datetime-local" class="form-control" placeholder="Fecha" name="FechaHoraFin">
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
