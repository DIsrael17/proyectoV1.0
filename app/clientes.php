<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    //
    protected $table='clientes';
		protected $primaryKey='folio';
    
    // Se escribe cuando no es un número
	public $incrementing = false;

	// Evita que use las etiquetas de tiempo
	public $timestamps=false;
    
    //se define los campos fisicos de la tabla
	protected $fillable=[
	'folio',
	'nombre',
	'apellidop',
	'apellidom',
	'numero_tel',
  'correo',
  'pais',
  'estado',
  'localidad',
  'comentario'
 ];
 // Se pone cuando unc campo esta conectado con una cable foranea
 // public function fabricante()
   // {
   	//cuando entra en la tabla los une con un inner join
    // return $this->belongsTo(Fabricante::Class,'id_fabricante');

   // }
}
