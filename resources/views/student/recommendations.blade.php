@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.search-bar')
    <div class="d-flex justify-content-center mt-2">
        <h1>{{ __('Recommendations') }}</h1>
    </div>
    <div class="d-flex justify-content-center flex-wrap gap-5 mt-5">
        <div class="card" style="width: 250px;">
            <a href="{{route('recommendation.see')}}">
                <img src="..." class="card-img-top" alt="...">
            </a>
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
@endsection
