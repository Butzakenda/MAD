<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Models\User;
class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view ('admin.formNewAdmin');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        /* dd($request);  */       
        $user = User::create([
            'name' => $request->input('nombreAdmin'),
            'email' => $request->input('emailAdmin'),
            'password' => Hash::make($request->input('passwordAdmin')),
            'tipo' => 'Administrador'
        ]);

        Administrador::create([
            'user_id' => $user->id,
            'Nombres' => $request->input('nombreAdmin'),
            'Apellidos' => $request->input('apellidoAdmin'),
            'CorreoELectronico' => $request->input('emailAdmin'),
            'Sexo' => $request->input('sexAdmin'),
            
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
