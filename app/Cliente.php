<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //Tabla del modelo
    protected $table = "clientes";

    //Atributos asignables
    protected $fillable = [
        'id', 'nombre', 'estado',
    ];

    //variables
    public static $activo = 'ACTIVO';
    public static $inactivo = 'INACTIVO';

    //Relaciones
    public function campaigns()
    {
        return $this->hasMany('App\Campaign');
    }

    public function envios()
    {
        return $this->hasMany('App\Envio');
    }

    public function contactos()
    {
        return $this->hasMany('App\Contacto');
    }

    public function listas()
    {
        return $this->hasMany('App\Lista');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function creditos()
    {
        return $this->hasMany('App\Credito');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }

    //funciones

    public function guardar($datos)
    {
        $this->id = $datos['id'];
        $this->nombre = $datos['nombre'];
        $this->estado = self::$activo;
        return $this->save();
    }

    public function editar($datos)
    {
        $this->nombre = $datos['nombre'];
        return $this->save();
    }

    public function eliminar()
    {
        return $this->delete();
    }

    public function activar()
    {
        $this->estado = self::$activo;
        return $this->save();
    }

    public function desactivar()
    {
        $this->estado = self::$inactivo;
        return $this->save();
    }


}
