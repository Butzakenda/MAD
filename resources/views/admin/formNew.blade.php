@extends('layouts.app')
@include('partials.nav')
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
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <textarea class="form-control" placeholder="Descripción" name="descripcion"></textarea>
                    </div>
                    <div class="col">
                        <input type="date" class="form-control" placeholder="Fecha" name="fecha">
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
