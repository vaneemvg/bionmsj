<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    //Tabla del modelos
    protected $table = "archivos";

    //Atributos asignables
    protected $fillable = [
        'nombre','tipo','archivo',
    ];
}
