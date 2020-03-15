<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vacuna extends Model
{
   protected $table='vacunas';

    // se especifica la clave primaria.
    protected $primaryKey='id_vacuna';

    // cuando no sea un numero la clave primaria y sea un varchar poner el siguiente comando.
    public $incrementing=false;

    // desactiva las etiquetas de tiempo.
    public $timestamps=false;

    // definimos los campos que van a recivir valor de los que se pueden pedir por el usuario.
    protected $fillable=[
    	'id_vacuna',
    	'mascota',
        'propietario',
        'apellidos_propietario',
        'fecha_programada',
    ];
     
}