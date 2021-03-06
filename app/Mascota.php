<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table='mascotas';

    // se especifica la clave primaria.
    protected $primaryKey='id_mascota';

    // cuando no sea un numero la clave primaria y sea un varchar poner el siguiente comando.
    public $incrementing=false;

    // desactiva las etiquetas de tiempo.
    public $timestamps=false;

    // definimos los campos que van a recivir valor de los que se pueden pedir por el usuario.
    protected $fillable=[
    	'id_mascota',
    	'especie',
        'sexo',
        'edad',
        'mascota',
        'fecha_nacimiento',
        'propietario'

    ];
     
}