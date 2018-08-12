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

Route::get('/', 'HomeController@index')->name('home');

/*Rutas de usuario*/
Route::group(['prefix' => 'user'], function () {
    Route::resource('listas', 'user\ListasController');
    Route::resource('campaigns', 'user\CampaignsController');
    Route::resource('contactos', 'user\ContactosController');
    Route::resource('archivos', 'user\ArchivosController');
});

/*Rutas de admin*/
Route::group(['prefix' => 'admin'], function () {
    Route::resource('users', 'admin\AdminUsersController');//resource genera todas las rutas del controlador
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
