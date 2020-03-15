<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estetica;
use Codedge\Fpdf\Fpdf\Fpdf;

class apiEsteticasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estetica=Estetica::all();
        return $estetica;
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
        $estetica=new Estetica;
        $estetica->id_estetica=$request->get('id_estetica');
        $estetica->nombre_animal=$request->get('nombre_animal');
        $estetica->nombre_dueño=$request->get('nombre_dueño');
        $estetica->tipo=$request->get('tipo');
        $estetica->fecha_programada=$request->get('fecha_programada');
        $estetica->hora_entrada=$request->get('hora_entrada');
        $estetica->hora_salida=$request->get('hora_salida');
        $estetica->save();
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
        $estetica=Estetica::find($id);
        return $estetica;
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
        $estetica=Estetica::find($id);
        $estetica->id_estetica=$request->get('id_estetica');
        $estetica->nombre_animal=$request->get('nombre_animal');
        $estetica->nombre_dueño=$request->get('nombre_dueño');
        $estetica->tipo=$request->get('tipo');
        $estetica->fecha_programada=$request->get('fecha_programada');
        $estetica->hora_entrada=$request->get('hora_entrada');
        $estetica->hora_salida=$request->get('hora_salida');
        $estetica->update();
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
        return Estetica::destroy($id);
    }

     public function imprimir(){
         
        $estetica=Estetica::all();

        
        $pdf=new Fpdf('P','mm','A4');

       
        $pdf->AddPage();

       
        $pdf->SetFont('Arial','B',15);   
        $pdf->SetFillColor(75,75,300);
        $pdf->SetDrawColor(50, 150,50);
        $pdf->SetTextColor(2,22,39);
        $pdf->Cell(190,8,utf8_decode('LISTADO DE ESTETICA'),0,1,'C',True);
        $pdf->Ln(15);


        $pdf->SetFont('Arial','B',12);
        $pdf->SetFillColor(68,163,243);
        $pdf->Cell(10,8,utf8_decode('NO.'),1,0,'C',true);
        $pdf->SetFillColor(68,163,243);
        $pdf->Cell(40,8,utf8_decode('NOMBRE ANIMAL'),1,0,'C',true);
        $pdf->SetFillColor(68,163,243);
        $pdf->Cell(70,8,utf8_decode('NOMBRE DUEÑO'),1,0,'C',true);
        $pdf->SetFillColor(68,163,243);
        $pdf->Cell(40,8,utf8_decode('TIPO'),1,0,'C',true);
        $pdf->SetFillColor(68,163,243);
        $pdf->Cell(30,8,utf8_decode('FECHA'),1,1,'C',true);
        $pdf->SetFillColor(68,163,243);
     

        $pdf->setFont('Arial','',10);
        foreach ($estetica as $esteticas) 
        {
            $pdf->SetFillColor(68,163,243);
            $pdf->Cell(10,8,utf8_decode($esteticas->id_estetica),1,0,'C',true);
            $pdf->Cell(40,8,utf8_decode($esteticas->nombre_animal),1,0,'C');
            $pdf->Cell(70,8,utf8_decode($esteticas->nombre_dueño),1,0,'C');
            $pdf->Cell(40,8,utf8_decode($esteticas->tipo),1,0,'C');
            $pdf->Cell(30,8,utf8_decode($esteticas->fecha_programada),1,1,'C');
            
        }
        
        $pdf->Output();
        exit;
    }
}




