<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videos extends Model
{
        //
    //se especifica el nombre de la tabla
    protected $table='videos';

    //se especifica la clave primaria
    protected $primaryKey='id_video';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    	'id_video',
        'nombre',
        'direccion_url',
        'descripcion',
        'fecha_publicacion',
        'fecha_expiracion',
        'id_tipo_tattoo'

           
    ];

    public function documentos()
    {
        return $this->belongsTo(tipo_tattoo::class,'id_tipo_tattoo');
    }
}