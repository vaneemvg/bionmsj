<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //Tabla del modelos
    protected $table = "tags";

    //Atributos asignables
    protected $fillable = [
        'cliente_id', 'nombre', 'user_id',
    ];

    //Relaciones
    public function listas()
    {
        return $this->belongsToMany('App\Lista')->as('lista_tag');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
