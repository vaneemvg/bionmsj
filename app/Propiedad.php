<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propiedad extends Model
{
    //Tabla del modelos
    protected $table = "propiedades";

    //Atributos asignables
    protected $fillable = [
        'nombre', 'detalle', 'validacion', 'valor', 'uso', 'aplica', 'obliga', 'estado',
    ];

    //Relaciones
    public function envios()
    {
        return $this->belongsToMany('App\Envio')->as('envio_propiedad');
    }

}
