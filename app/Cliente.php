<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //Tabla del modelo
    protected $table = "clientes";

    //Atributos asignables
    protected $fillable = [
        'nombre',
    ];
}
