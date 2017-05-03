<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


/*Llamadas al controlador Auth*/
Route::get('/','HomeController@showWelcome');
Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

 
/*Rutas privadas solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{
    Route::get('/Admin/productos', 'AdminController@ShowProductos'); // Vista de inicio de productos
    Route::get('/Admin/pedidos', 'AdminController@ShowPedidos'); // Vista de inicio de pedidos
    Route::get('/Admin/usuarios', 'AdminController@ShowUsuarios'); // Vista de inicio de usuarios
    Route::get('/Admin/estadisticas', 'AdminController@ShowEstadisticas'); // Vista de inicio de estadisticas
    Route::get('/Admin/configuracion', 'AdminController@ChangePassword'); //vista de configuración de usuario

});


// Rutas para tienda
Route::get('/Tienda/productos','TiendaController@ShowProductos');
Route::post('/Tienda/productos','TiendaController@ProductosC');
