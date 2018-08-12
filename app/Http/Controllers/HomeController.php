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
        $user = User::find(1);

        if($user->tipo == 'USER'){
           $dashboard= $user->getDashboard();
            return view('user.home')->with('usuario', $user)->with('dashboard',$dashboard);
        }else{
            return view('admin.home')->with('usuario', $user);
        }
        /*HABILITAR AL FINALIZAR AUTENTICACION
        $user=Auth::user();
        if($user->tipo = 'USER'){
            return view('user.home')->with('usuario', $user)->with('dashboard',$dashboard);
        }else{
            return view('admin.home')->with('usuario', $user)->with('dashboard',$dashboard);
        }*/

    }
}
