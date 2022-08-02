<?php

namespace App;

use Illuminate\Database\Eloquent\Model;  

class Peticion extends Model
{
    protected $table='peticiones';
	protected $primaryKey='id_peticion';
	public $incrementing = false;

	public $timestamps=false;

	protected $fillable=[
	'id_peticion',
	'descripcion',
	'folio'
	];

    public function clientes()
    {
        return $this->belongsTo(clientes::class,'folio');
    }
}
