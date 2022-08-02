<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfigurarPagina extends Model
{
        //
    //se especifica el nombre de la tabla
    protected $table='configurar_pagina';

    //se especifica la clave primaria
    protected $primaryKey='id_config';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    	'id_config',
    	'logo',
    	'nombre',
    	'fondo',
        'footer',
        'icono',
        'seccion1',
        'seccion2',
        'seccion3',
        'seccion4',
        'seccion5',
        'seccion6',
        'seccion7',
        'seccion8',
        'seccion9',
        'seccion10'
    ];
}
