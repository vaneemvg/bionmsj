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
        'cliente_id', 'name', 'email', 'password', 'foto',
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
	 }}
