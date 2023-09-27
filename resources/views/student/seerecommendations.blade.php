@extends('layouts.app')

<!-- @section('content') -->
<div class="container">
    @include('partials.search-bar')
    <div class="d-flex justify-content-center mt-2">
        <h1>{{ __('Recommendations') }}</h1>
    </div>
    <div class="d-flex justify-content-center">
        <div class="w-80 py-5">
            <div class="d-flex justify-content-center mt-2">
                <div class="card" style="width: 728px;">
                    <img src="WindowsIcon.jpg" class="card-img-top" alt="...">
                    <div class="px-2 pt-2 d-flex justify-content-between">
                        <p class="">Title</p>
                        <p class="">Duration</p>
                    </div>
                    <div class="px-2 d-flex justify-content-end">
                        <p class="">Price</p>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-start  mt-2">
                <p class="">Description</p>
            </div>
        </div>
    </div>
</div>
