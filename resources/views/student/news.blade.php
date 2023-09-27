@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.search-bar')
    <div class="d-flex justify-content-center mt-2">
        <h1>{{ __('News') }}</h1>
    </div>
    <div class="d-flex justify-content-center flex-wrap gap-5 mt-5">
        <div class="card" style="width: 250px;">
            <img src="..." class="card-img-top" alt="...">
            <div class="px-2 pt-2 d-flex justify-content-between">
                <p class="">Title</p>
                <p class="">Date</p>
            </div>
            <div class="px-2 d-flex justify-content-start">
                <p class="">Description</p>
            </div>
        </div>
    </div>
</div>
@endsection
