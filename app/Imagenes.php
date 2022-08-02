<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagenes extends Model
{
        //
    //se especifica el nombre de la tabla
    protected $table='imagenes';

    //se especifica la clave primaria
    protected $primaryKey='id_imagen';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    	'id_imagen',
        'nombre',
        'archivo',
        'descripcion'

           
    ];

}