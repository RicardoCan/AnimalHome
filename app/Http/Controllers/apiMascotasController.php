<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mascota;

class apiMascotasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $mascota=Mascota::all();
        return $mascota;
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

        $mascota=new Mascota;
        $mascota->id_mascota=$request->get('id_mascota');
        $mascota->especie=$request->get('especie');
        $mascota->sexo=$request->get('sexo');
        $mascota->edad=$request->get('edad');
        $mascota->mascota=$request->get('mascota');
        $mascota->fecha_nacimiento=$request->get('fecha_nacimiento');
        $mascota->propietario=$request->get('propietario');
        $mascota->save();
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
        $mascota=Mascota::find($id);
        return $mascota;
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
        $mascota=Mascota::find($id);
        $mascota->id_mascota=$request->get('id_mascota');
        $mascota->especie=$request->get('especie');
        $mascota->sexo=$request->get('sexo');
        $mascota->edad=$request->get('edad');
        $mascota->mascota=$request->get('mascota');
        $mascota->fecha_nacimiento=$request->get('fecha_nacimiento');
        $mascota->propietario=$request->get('propietario');
        $mascota->update();
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

        return Mascota::destroy($id);
    }
}
