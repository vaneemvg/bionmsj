<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashboard = array(
            "contactos" => 1528,
            "listas"=> 5,
            "creditos" => 2500,
            "campañas"=> 8,
            "imagenes"=>25,
            "audiovideo"=>3,
            "plantillas"=>0,
            "archivos"=>28,
        );
        return view('user.home')->with('usuario', User::find(1))->with('dashboard',$dashboard);
        /*HABILITAR AL FINALIZAR AUTENTICACION
        if(Auth::user()->tipo = 'USER'){
            $dashboard = array();
            return view('user.home')->with('usuario', Auth::user())->with('dashboard',$dashboard);
        }else{
            $dashboard = array();
            return view('admin.home')->with('usuario', Auth::user())->with('dashboard',$dashboard);
        }*/

    }
}
