<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
      //
    //se especifica el nombre de la tabla
    protected $table='municipios';

    //se especifica la clave primaria
    protected $primaryKey='id_municipio';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    	'id_municipio',
    	'nombre_municipio',
    	'estado' 
    ];

    public function estados()
    {
        return $this->belongsTo(Estado::class,'id_estado');
    }
}
