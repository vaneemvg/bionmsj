<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
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
}
