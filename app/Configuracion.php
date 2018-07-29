<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    //Tabla del modelos
    protected $table = "configuraciones";

    //Atributos asignables
    protected $fillable = [
        'nombre', 'user_id', 'valor',
    ];

    //Relaciones
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
