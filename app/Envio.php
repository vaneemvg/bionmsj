<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    //Tabla del modelos
    protected $table = "envios";

    //Atributos asignables
    protected $fillable = [
        'tipo', 'fecha', 'texto', 'cliente_id', 'estado', 'user_id',
    ];

    //Relaciones

    public function campaigns()
    {
        return $this->belongsToMany('App\Campaign')->as('campaign_envio');;
    }

    public function contactos()
    {
        return $this->belongsToMany('App\Contacto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function propiedades()
    {
        return $this->belongsToMany('App\Propiedad');
    }
}
