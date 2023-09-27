@extends('layouts.app')

<!-- @section('content') -->
<div class="container">
    <div class="d-flex justify-content-center mt-5">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="🔍 Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <div class="d-flex justify-content-center mt-2">
        <h1>{{ __('Multimedia') }}</h1>
    </div>
    <div class="d-flex justify-content-center flex-wrap gap-5 mt-5">
        <div class="card" style="width: 250px;">
            <img src="..." class="card-img-top" alt="...">
            <div class="px-2 pt-2 d-flex justify-content-between">
                <p class="">Title</p>
                <p class="">Duration</p>
            </div>
            <div class="px-2 d-flex justify-content-end">
                <p class="">Price</p>
            </div>
        </div>
    </div>
</div>
