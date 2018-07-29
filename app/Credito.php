<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Credito extends Model
{
    //Tabla del modelos
    protected $table = "creditos";

    //Atributos asignables
    protected $fillable = [
        'cliente_id', 'detalle', 'cantidad', 'tipo', 'user_id',
    ];

    //Relaciones
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
