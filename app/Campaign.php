<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
	//Tabla del modelos
    protected $table = "campaigns";
	
    //Atributos asignables
    protected $fillable = [
        'nombre', 'estado','user_id','cliente_id',
    ];
	
	//Relaciones
    public function user()
    {
        return $this->belongsTo('App\User');
    }

	public function informe()
	 {
		return $this->hasOne('App\Informe');
	 }
	 
	 public function envios()
	 {
		 return $this->belongsToMany('App\Envio');
	 }
}
