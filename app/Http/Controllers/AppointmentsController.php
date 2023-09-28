<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;
use App\Models\Estudiante;
use App\Models\Cita;
class AppointmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function list(string $id)
    {
        //
        $CoachAppointment = Coach ::findOrFail($id);
         
        return view('student.formDateCoach', compact('CoachAppointment'));
    }

    public function editappointment()
    {
        //
        return view('student.formReDateCoach');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, string $id)
    {
        //
        
        $estudiante = Estudiante::where('user_id', auth()->id())->first();
        /* dd($estudiante); */
        $coachB = Coach ::findOrFail($id);
        /* dd($coachB); */
        Cita::create([
            'IdEstudiantes' => $estudiante->IdEstudiantes,
            'IdCoach' => $coachB->IdCoach,
            'Duracion' => $request->input('Duracion'),
            'Estado' => 'En revisión',
            'FechaHoraInicio' => $request->input('FechaHoraInicio'),
            'FechaHoraFin' => $request->input('FechaHoraFin'),
        ]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function showAppList()
    {
        //
        return view ('student.appointments');
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
