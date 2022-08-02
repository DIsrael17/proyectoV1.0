<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
     //
    //se especifica el nombre de la tabla
    protected $table='carousels';

    //se especifica la clave primaria
    protected $primaryKey='id';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
 	'id',
 	'img1',
 	'img2',
 	'img3',
 	'img4',
 	'img5'
    ];
}
