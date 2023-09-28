@extends('layouts.app')

@section('content')
@include('partials.search-bar')
<div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card" style="width: 70%; height: 300px;">
        <div class="card-body text-center">
            <br>
            <h5 class="card-title">Create a New Post</h5>
            <form>
                <div class="row">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Título" name="titulo">
                    </div>
                    <div class="col">
                        <input type="file" class="form-control" placeholder="Imagen" name="imagen">
                    </div>
                    <div class="col">
                        <select class="form-control" name="tipo">
                            <option value="channel">Channel</option>
                            <option value="course">Course</option>
                            <option value="video">Video</option>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Lenguajes" name="lenguajes">
                    </div>
                    <div class="col">
                        <textarea class="form-control" placeholder="Descripción" name="descripcion"></textarea>
                    </div>
                    <div class="col">
                        <select class="form-control" name="lenguaje">
                            <option value="Python">Python</option>
                            <option value="Javascript">Javascript</option>
                            <option value="C#">C#</option>
                            <option value="Php">Php</option>
                            <option value="Java">Java</option>
                            <option value="Kotlin">Kotlin</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
                <br><br>
                <div class="row mt-3">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection


