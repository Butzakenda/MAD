<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Multimedia;
use App\Models\Administrador;
class MultimediaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $multimedia = Multimedia::orderBy('IdMultimedia','ASC')->get();
        return view('student.multimedia', compact('multimedia'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $admin = Administrador::where('user_id', auth()->id())->first();
        /* dd($admin); */
        Multimedia::create([
            'IdAdministrador' => $admin->IdAdministradores,
            'Nombres' => $request->input('Nombres'),
            'Descripcion' => $request->input('Descripcion'),
            'Tipo' => $request->input('Tipo'),
            'Idioma' => $request->input('Idioma'),
            'Estado' => $request->input('Estado'),
            'Duracion' => $request->input('Duracion'),
            'Lenguaje' => $request->input('Lenguaje'),
            'Tecnologia' => $request->input('Tecnologia'),
            'Precio' => $request->input('Precio'),
            'Certificado' => $request->input('Certificado'),
            'Imagen' => $request->input('Imagen'),
            'Video' => $request->input('Video'),
            'FechaInicio' => $request->Date('FechaInicio'),
            'FechaFin' => $request->Date('FechaFin'),
        ]);
        
        return back();
    }
    public function showCreateMultimedia()
    {
        //
        return view('admin.formNewMultimedia');
    }

    public function see()
    {
        //
        return view('student.seeMultimedia');
    }

    public function editmultimedia()
    {
        //
        return view('admin.formEditMultimedia');
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
