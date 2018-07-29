<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    //Tabla del modelos
    protected $table = "informes";

    //Atributos asignables
    protected $fillable = [
        'descarga', 'campaign_id', 'fecha_hora', 'user_id',
    ];

    //Relaciones
    public function campaign()
    {
        return $this->belongsTo('App\Campaign');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
