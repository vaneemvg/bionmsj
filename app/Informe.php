<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    //Tabla del modelos
    protected $table = "informes";
	
	//Clave primaria
	protected $primaryKey = 'campaña_id';
	
    //Atributos asignables
    protected $fillable = [
        'descarga', 
    ];
	
	//Relaciones
	public function campaña()
	 {
		return $this->belongsTo('App\Campaign');
	 }
}
