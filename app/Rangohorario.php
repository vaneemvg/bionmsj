<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rangohorario extends Model
{
     //Tabla del modelos
    protected $table = "rangoshorarios";
	
    //Atributos asignables
    protected $fillable = [
        'proveedor_id', 'hora_desde', 'hora_hasta', 
    ];
	
	//Relaciones
	public function envios()
	 {
		return $this->belongsToMany('App\Envio');
	 }
}
