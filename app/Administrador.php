<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    //
    //se especifica el nombre de la tabla
    protected $table='administradores';

    //se especifica la clave primaria
    protected $primaryKey='curp';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    'curp',
    'nombre',
    'apellidop',
    'apellidom',
    'numero_tel',
    'correo',
    'contrasenia',
    'foto'
    ];
}
