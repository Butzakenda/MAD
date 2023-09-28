@extends('layouts.app')

@section('content')
@include('partials.search-bar')
<div class="d-flex justify-content-center mt-5">
    <div class="card" style="width: 70%;">
        <div class="card-body text-center">
            <br>
            <h5 class="card-title">Create a New Post</h5>
            <form method="POST" action=" {{route('multimedia.create')}} ">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        Title: <input type="text" class="form-control" placeholder="Título" name="Nombres" id="Nombres">
                    </div>
                    <div class="col-md-4">
                        Begins at: <input type="datetime-local" class="form-control" placeholder="FechaInicio" name="FechaInicio" id="FechaInicio">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        Ends at: <input type="datetime-local" class="form-control" placeholder="FechaFin" name="FechaFin" id="FechaFin">
                    </div>
                    <div class="col-md-4">
                        Technology: <input type="text" class="form-control" placeholder="Tecnologia" name="Tecnologia" id="Tecnologia">
                    </div>
                    <div class="col-md-4">
                        Price: <input type="text" class="form-control" placeholder="Precio" name="Precio" id="Precio">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        Multimedia: 
                        <select class="form-control" name="Tipo" id="Tipo">
                            <option value="channel">Channel</option>
                            <option value="course">Course</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        Idioma: 
                        <select class="form-control" name="Idioma" id="Idioma">
                            <option value="English">English</option>
                            <option value="Spanish">Spanish</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        Estado: 
                        <select class="form-control" name="Estado" id="Estado">
                            <option value="English">Active</option>
                            <option value="Spanish">Soonly</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        Description: <textarea class="form-control" placeholder="Descripción" name="Descripcion" id="Descripcion"></textarea>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        Lenguaje:
                        <select class="form-control" name="Lenguaje"  id="Lenguaje">
                            <option value="Python">Python</option>
                            <option value="Javascript">Javascript</option>
                            <option value="C#">C#</option>
                            <option value="Php">Php</option>
                            <option value="Java">Java</option>
                            <option value="Kotlin">Kotlin</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                    <div class="col-md-8">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
