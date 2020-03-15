<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacuna;

class apiVacunasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $vacunas=Vacuna::all();
        return $vacunas;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $vacuna=new Vacuna;
        $vacuna->id_vacuna=$request->get('id_vacuna');
        $vacuna->mascota=$request->get('mascota');
        $vacuna->propietario=$request->get('propietario');
        $vacuna->apellidos_propietario=$request->get('apellidos_propietario');
        $vacuna->fecha_programada=$request->get('fecha_programada');
        $vacuna->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $vacuna=Vacuna::find($id);
        return $vacuna;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $vacuna=Vacuna::find($id);
        $vacuna->id_vacuna=$request->get('id_vacuna');
        $vacuna->mascota=$request->get('mascota');
        $vacuna->propietario=$request->get('propietario');
        $vacuna->apellidos_propietario=$request->get('apellidos_propietario');
        $vacuna->fecha_programada=$request->get('fecha_programada');
        $vacuna->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Vacuna::destroy($id);
    }
}
