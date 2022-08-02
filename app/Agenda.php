<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
     protected $table='agendas';
	protected $primaryKey='id_agenda';
	public $incrementing = false; 

	public $timestamps=false;

	protected $fillabel=[
	'id_agenda',
	'titulo',
	'fechaInicio',
	'fechaFin',
	'horaInicio',
	'horaFin',
	'color',
	'actividad',
	'id_peticion'
	];

    public function peticiones()
    {
        return $this->belongsTo(Peticion::class,'id_peticion');
    }
}
