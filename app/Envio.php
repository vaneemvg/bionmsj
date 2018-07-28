<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    //Tabla del modelos
    protected $table = "envios";
	
    //Atributos asignables
    protected $fillable = [
         'tipo','remitente','fecha','rango_id','desuscribe',
    ];
	
	//Relaciones
	public function enviosms()
	 {
		return $this->hasOne('App\Enviosms');
	 }
	 
	 public function enviowapp()
	 {
		return $this->hasOne('App\Enviowapp');
	 }
	 
	 public function campaigns()
	 {
		 return $this->belongsToMany('App\Campaign');
	 }
	 
	 public function contactos(){
		 return $this->belongsToMany('App\Contacto')->withPivot('campo_tipo', 'campo_valor', 'estado');
	 }
}
