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
        return view('asistentes.index');
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
        //dd($request);
        //
        $asistente = new Asistentes;
        $asistente->apellido_p = $request->ap_paterno;
        $asistente->apellido_m = $request->ap_materno;
        $asistente->nombre = $request->nombre;
        $asistente->dni = $request->nro_dni;
        $asistente->fecha_nacimiento = $request->fecha_nac;
        $asistente->sexo = $request->sexo;
        $asistente->lugar_nac = $request->lug_nacimiento;
        $asistente->ubi_actual = $request->ubicacion_actual;
        $asistente->centro_lab_act = $request->cent_lab_actual;
        $asistente->cargo = $request->cargo_actual;
        $asistente->grado_academico = $request->grado_academico;
        $asistente->profesion = $request->profesion;
        $asistente->correo = $request->email;
        $asistente->num_celular = $request->num_celular;
        $asistente->agremiado = $request->agremiado;
        $asistente->num_colegiatura = $request->nro_colegiatura;
        //dd($asistente);
        $asistente->save();

        //respuesta
        return redirect()->route('asistentes.index');
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
