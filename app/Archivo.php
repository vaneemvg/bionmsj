<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    //Tabla del modelos
    protected $table = "archivos";

    //Atributos asignables
    protected $fillable = [
        'nombre','tipo','archivo','user_id',
    ];

    //Relaciones
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function envios()
    {
        return $this->belongsToMany('App\Envio')->as('envio_archivo');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
