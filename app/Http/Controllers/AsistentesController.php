<?php

namespace App\Http\Controllers;

use App\Models\Asistentes;
use Illuminate\Http\Request;

class AsistentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([

        ]);
        //
        $asistente = new Asistentes;
        $asistente->apellido_p = ;
        $asistente->apellido_m = ;
        $asistente->nombre = ;
        $asistente->dni = ;
        $asistente->fecha_nacimiento = ;
        $asistente->sexo = ;
        $asistente->ubi_actual = ;
        $asistente->centro_lab_act = ;
        $asistente->cargo = ;
        $asistente->grado_academico = ;
        $asistente->profesion = ;
        $asistente->correo = ;
        $asistente->num_celular = ;
        $asistente->agremiado = ;
        $asistente->num_colegiatura = ;
        $asistente->save();

        //respuesta
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function show(Asistentes $asistentes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function edit(Asistentes $asistentes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Asistentes $asistentes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asistentes  $asistentes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asistentes $asistentes)
    {
        //
    }
}
