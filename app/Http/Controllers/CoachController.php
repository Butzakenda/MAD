<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Coach;
class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view ('admin.formNewCoach');
    }
    public function showListCoach()
    {
        //
        $coach = Coach::orderBy('Nombres','ASC')->get();
        /* dd($coach); */
        return view ('student.coachs',compact('coach'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //

        $user = User::create([
            'name' => $request->input('nombreCoach'),
            'email' => $request->input('emailCoach'),
            'password' => Hash::make($request->input('passwordCoach')),
            'tipo' => 'Coach'
        ]);

        Coach::create([
            'user_id' => $user->id,
            'Nombres' => $request->input('nombreCoach'),
            'Apellidos' => $request->input('apellidoCoach'),
            'CorreoElectronico' => $request->input('emailCoach'),
            'Sexo' => $request->input('sexCoach'),
        ]);
        return back();
    }

    /**
     * Store a newly created resource in storage.
     */
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
