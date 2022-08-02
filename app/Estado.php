<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
      //
    //se especifica el nombre de la tabla
    protected $table='estados';

    //se especifica la clave primaria
    protected $primaryKey='id_estado';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    	'id_estado',
    	'estado'
    ];
} 
