<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //Tabla del modelo
    protected $table = "contactos";

    //Atributos asignables
    protected $fillable = [
        'codigo','nombre', 'telefono', 'email','estado','user_id','cliente_id',
    ];

    //Relaciones
    public function envios()
    {
        return $this->belongsToMany('App\Envio')->as('envio_contacto')->withPivot('campo_tipo', 'campo_valor', 'estado');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function listas()
    {
        return $this->belongsToMany('App\Lista')->as('lista_contacto');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

}
