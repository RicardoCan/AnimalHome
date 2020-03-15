<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medicamento;

class apiMedicamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $medicamento=Medicamento::all();
        return $medicamento;
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
        $medicamento=new Medicamento;
        $medicamento->id_medicamento=$request->get('id_medicamento');
        $medicamento->tipo_animal=$request->get('tipo_animal');
        $medicamento->utilidad=$request->get('utilidad');
        $medicamento->save();
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
        $medicamento=Medicamento::find($id);
        return $medicamento;
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
        $medicamento=Medicamento::find($id);
        $medicamento->id_medicamento=$request->get('id_medicamento');
        $medicamento->tipo_animal=$request->get('tipo_animal');
        $medicamento->utilidad=$request->get('utilidad');
        $medicamento->update();

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
        return Medicamento::destroy($id);
    }
}
