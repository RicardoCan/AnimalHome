<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuracion;

class apiConfiguracionesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $configuracion=Configuracion::all();
        return $configuracion;
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
        $configuracion=new Configuracion;
        $configuracion->id_nombre=$request->get('id_nombre');
        $configuracion->mision=$request->get('mision');
        $configuracion->vision=$request->get('vision');
        $configuracion->calle=$request->get('calle');
        $configuracion->telefono=$request->get('telefono');
        $configuracion->save();
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
        $configuracion=Configuracion::find($id);
        return $configuracion;
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
        $configuracion=Configuracion::find($id);
        $configuracion->id_nombre=$request->get('id_nombre');
        $configuracion->mision=$request->get('mision');
        $configuracion->vision=$request->get('vision');
        $configuracion->calle=$request->get('calle');
        $configuracion->telefono=$request->get('telefono');
        $configuracion->update();
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
        return Configuracion::destroy($id);
    }
}
