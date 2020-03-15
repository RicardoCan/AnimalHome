<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estetica extends Model
{
   	protected $table='esteticas';

    // se especifica la clave primaria.
    protected $primaryKey='id_estetica';

    // cuando no sea un numero la clave primaria y sea un varchar poner el siguiente comando.
    public $incrementing=false;

    // desactiva las etiquetas de tiempo.
    public $timestamps=false;

    // definimos los campos que van a recivir valor de los que se pueden pedir por el usuario.
    protected $fillable=[
    	'id_estetica',
    	'nombre_animal',
        'nombre_dueño',
        'tipo',
        'fecha_programada',
        'hora_entrada',
        'hora_salida'

    ];
     
}