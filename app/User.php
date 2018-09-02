<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cliente_id', 'name', 'email', 'avatar', 'estado', 'tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //relaciones
    public function listas()
    {
        return $this->hasMany('App\Lista');
    }

    public function contactos()
    {
        return $this->hasMany('App\Contacto');
    }

    public function campaigns()
    {
        return $this->hasMany('App\Campaign');
    }

    public function envios()
    {
        return $this->hasMany('App\Envio');
    }

    public function creditos()
    {
        return $this->hasMany('App\Credito');
    }

    public function configuraciones()
    {
        return $this->hasMany('App\Configuracion');
    }

    public function tags()
    {
        return $this->hasMany('App\Tag');
    }

    public function archivos()
    {
        return $this->hasMany('App\Archivo');
    }

    public function informes()
    {
        return $this->hasMany('App\Informe');
    }

    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }

    public function getDashboard()
    {
        $dash = array();

        $dash = array(
            "contactos" => 1528,
            "listas"=> 5,
            "creditos" => 2500,
            "campañas"=> 8,
            "imagenes"=>25,
            "audiovideo"=>3,
            "plantillas"=>0,
            "archivos"=>28,
        );
        return $dash;
    }

    public function getAdminDashboard()
    {
        $dash = array();

        return $dash;
    }

    public function guardar($datos)
    {
        //armar el guardar aca con modelado de contraseña
        //$user = new User($datos->all());
        //$user->password = bcrypt($datos->password);
        //$user->save();
        //dd('usuario creado');

    }

}
