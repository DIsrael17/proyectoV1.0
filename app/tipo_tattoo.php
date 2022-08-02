<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_tattoo extends Model
{
     //
    //se especifica el nombre de la tabla
    protected $table='tipo_tattoos';

    //se especifica la clave primaria
    protected $primaryKey='id_tipo_tattoo';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = true;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    'id_tipo_tattoo',
    'tipo_tattoo'
    ];
}
