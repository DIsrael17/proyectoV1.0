<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tattoos extends Model
{
    //
    //se especifica el nombre de la tabla
    protected $table='tattoos';

    //se especifica la clave primaria
    protected $primaryKey='id_tattoo';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = true;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
 	'id_tattoo',
    'id_tipo_tattoo',
 	'nombre',
 	'descripcion',
 	'imagen'
    ];

    public function tipo_tattoo()
    {
    	return $this->belongsTo(tipo_tattoo::class,'id_tipo_tattoo');
    	//belogsTo es para indicar de uno a varios
    }
}
