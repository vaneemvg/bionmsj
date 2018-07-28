<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enviowapp extends Model
{
     //Tabla del modelos
    protected $table = "enviowapp";
	
	//Clave primaria
	protected $primaryKey = 'envio_id';
	
    //Atributos asignables
    protected $fillable = [
        'asunto', 'texto', 'perfilimg', 'imagen', 'audio', 'video',
    ];
	
	//Relaciones
	public function envio()
	 {
		return $this->belongsTo('App\Envio');
	 }
}
