<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*Ruta autenticación*/
Auth::routes();

/*HABILITAR AL FINALIZAR AUTENTICACION
Route::group(['middleware' => 'auth'], function (){
    Route::get('/', 'HomeController@index')->name('home');
    Route::group(['prefix' => 'user'], function () {
        Route::resource('listas', 'user\ListasController');
        Route::resource('campaings', 'user\CampaingsController');
        Route::resource('contactos', 'user\ContactosController');
        Route::resource('galeria', 'user\ArchivosController');
    });
    Route::group(['prefix' => 'admin'], function () {//esto habria que validar con autenticacion de admin?
        Route::resource('listas', 'admin\AdminUsersController');
        Route::resource('campaings', 'admin\AdminCampaingsController');
        Route::resource('galeria', 'admin\AdminArchivosController');
    });
});*/

Route::get('/', 'HomeController@index')->name('home');
Route::group(['prefix' => 'user'], function () {
    Route::resource('listas', 'user\ListasController');
    Route::resource('campaigns', 'user\CampaignsController');
    Route::resource('contactos', 'user\ContactosController');
    Route::resource('galeria', 'user\ArchivosController');
});
/*
Route::get('/', function () {
    return view('home');
});//despues sacar esto y llamar del controlador

/*Rutas de usuario*/
Route::group(['prefix' => 'user'], function () {
    Route::resource('listas', 'user\ListasController');
});

/*Rutas de admin*/
Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'admin\UsersController');//resource genera todas las rutas del controlador
});


/*
Route::get('login', function () {
    return view('login');
});

Route::get('profile', 'UserController@showProfile');


Route::get('lists', 'user\ListaController@showListas');

Route::get('campaigns', 'user\CampaignController@showCampaigns');

Route::get('galery', function () {
    return view('user.galery');
});

*/
/* Rutas de administrador

Route::get('admin/campaigns', function () {
    return view('campaigns');
});

Route::get('admin/galery', function () {
    return view('galery');
});

Route::get('admin/profile/{id}', function ($id) {
    return view('user.profile', array('user' => $id));
});*/
