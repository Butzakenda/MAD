@extends('layouts.app')

@section('content')
<div class="container">
    @include('partials.search-bar')
    <div class="d-flex justify-content-center mt-2">
        <h1>{{ __('Coachs') }}</h1>
    </div>
    @auth
    @if(Auth::user()->tipo == 'Administrador')
    <div class="d-flex justify-content-center flex-wrap gap-5 mt-3">
        <a href="{{route('coach.index')}}">
            <button type="button" class="btn btn-success">
                New Coach
            </button>
        </a>
        <a href="{{route('admin.index')}}">
            <button type="button" class="btn btn-success">
                New Administrator
            </button>
        </a>
    </div>
    @endif
    @endauth
    <div class="d-flex justify-content-center flex-wrap gap-5 mt-3">
        <table class="table table-striped table-hover border">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Learning Way</th>
                    <th scope="col">Schedule Appointment</th>
                </tr>
            </thead>

            @forelse ($coach as $coachI)

            <tbody>
                <tr>
                    <th scope="row">{{$coachI->IdCoach}}</th>
                    <td>{{$coachI->Nombres}}</td>
                    <td>{{$coachI->LearningWay}}</td>
                    <td>
                        @auth
                        <a href="{{route('coach.schedule', $coachI->IdCoach, Auth::user()->id)}}">
                            <button type="button" class="btn btn-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z" />
                                </svg>
                                Schedule
                            </button>
                        </a>
                        @else
                        <h6>You must log in!</h6>
                        @endauth
                    </td>
                </tr>
            </tbody>
            @empty
            <p>Datos no encontrados</p>
            @endforelse

        </table>
    </div>
</div>
@endsection
