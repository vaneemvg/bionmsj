<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    //Tabla del modelo
    protected $table = "listas";

    //Atributos asignables
    protected $fillable = [
        'nombre', 'estado', 'user_id', 'cliente_id', 'created_at', 'updated_at',
    ];

    //Relaciones
    public function contactos()
    {
        return $this->belongsToMany('App\Contacto');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
}
