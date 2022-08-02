<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mCategoria extends Model
{
        //
    //se especifica el nombre de la tabla
    protected $table='categorias';

    //se especifica la clave primaria
    protected $primaryKey='id_categoria';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    	'id_categoria',
    	'nombre'];
        
}