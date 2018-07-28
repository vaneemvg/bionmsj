<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enviosms extends Model
{
    //Tabla del modelos
    protected $table = "enviosms";
	
	//Clave primaria
	protected $primaryKey = 'envio_id';
	
    //Atributos asignables
    protected $fillable = [
        'asunto', 'texto','imagen',
    ];
	
	//Relaciones
	public function envio()
	 {
		return $this->belongsTo('App\Envio');
	 }
}
