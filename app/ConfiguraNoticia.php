<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfiguraNoticia extends Model
{
        //
    //se especifica el nombre de la tabla
    protected $table='noticias';

    //se especifica la clave primaria
    protected $primaryKey='id_noticia';
    //solo cuando la clave primaria no sea numerica
    public $incrementing = false;
    //desactiva las etiquetas de tiempo 
    public $timestamps=false;
    //definimos los campos que van a recibir algúns valor
    protected $fillabel=[
    	'id_noticia',
    	'descripcion',
    	'titulo',
        'subtitulo',
        'publicado',
        'fecha_publicacion',
        'fecha_expiracion',
        'id_categoria'
        
    ];

    public function categorias()
    {
        return $this->belongsTo(mCategoria::class,'id_categoria');
    }
}