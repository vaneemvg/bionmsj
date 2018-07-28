<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //Tabla del modelo
    protected $table = "contactos";

    //Atributos asignables
    protected $fillable = [
        'nombre', 'telefono', 'estado','user_id','cliente_id','created_at','updated_at',
    ];

    //Relaciones
    public function listas()
    {
        return $this->belongsToMany('App\Lista','lista_contacto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
