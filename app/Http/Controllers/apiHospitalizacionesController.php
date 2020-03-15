<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospitalizacion;

class apiHospitalizacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hospitalizacion=Hospitalizacion::all();
        return $hospitalizacion;
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
        $hospitalizacion=new Hospitalizacion;
        $hospitalizacion->id_posicion=$request->get('id_posicion');
        $hospitalizacion->nombre_dueño=$request->get('nombre_dueño');
        $hospitalizacion->nombre_mascota=$request->get('nombre_mascota');
        $hospitalizacion->causa=$request->get('causa');
        $hospitalizacion->hora_entrada=$request->get('hora_entrada');
        $hospitalizacion->hora_salida=$request->get('hora_salida');
        $hospitalizacion->estatus=$request->get('estatus');
        $hospitalizacion->save();
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
        $hospitalizacion=Hospitalizacion::find($id);
        return $hospitalizacion;
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
        $hospitalizacion=Hospitalizacion::find($id);
        $hospitalizacion->id_posicion=$request->get('id_posicion');
        $hospitalizacion->nombre_dueño=$request->get('nombre_dueño');
        $hospitalizacion->nombre_mascota=$request->get('nombre_mascota');
        $hospitalizacion->causa=$request->get('causa');
        $hospitalizacion->hora_entrada=$request->get('hora_entrada');
        $hospitalizacion->hora_salida=$request->get('hora_salida');
        $hospitalizacion->estatus=$request->get('estatus');
        $hospitalizacion->update();
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
        return Hospitalizacion::destroy($id);
    }
}
