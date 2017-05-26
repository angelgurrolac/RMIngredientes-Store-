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

Route::get('email', 'TiendaController@email');
Route::get('emailEnvio', 'TiendaController@emailEnvio');
Route::get('emailEntregado', 'TiendaController@emailEntregado');

/*Llamadas al controlador Auth*/
Route::get('/','HomeController@showWelcome');
Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión

 
/*Rutas privadas solo para usuarios autenticados*/
Route::group(['before' => 'auth'], function()
{
    Route::get('/Admin/productos', 'AdminController@ShowProductos'); // Vista de inicio de productos
    Route::post('/Admin/agregarP', 'AdminController@AgregarP'); // Agregar producto
    Route::post('/Admin/editarP', 'AdminController@EditarP'); // Editar producto
    Route::get('/Admin/pedidos', 'AdminController@ShowPedidos'); // Vista de inicio de pedidos
    Route::get('/Admin/usuarios', 'AdminController@ShowUsuarios'); // Vista de inicio de usuarios
    Route::post('/Admin/editarU', 'AdminController@EditarU'); // Editar usuario
    Route::post('Admin/EditarPedido', 'AdminController@EditarPedido'); // Editar pedido
    Route::post('/Admin/AgregarU', 'AdminController@AgregarU'); // Agregar usuarios
    Route::get('/Admin/estadisticas', 'AdminController@ShowEstadisticas'); // Vista de inicio de estadisticas
    Route::get('/Admin/configuracion', 'AdminController@ChangePassword'); //vista de configuración de usuario
    Route::post('/Admin/GuardarContrasena', 'AdminController@GuardarContrasena'); //vista de configuración de usuario

});


// Rutas para tienda
Route::get('/Tienda/productos','TiendaController@ShowProductos');
Route::post('/Tienda/productos','TiendaController@ProductosC');

   // rutas para categorias
Route::post('Tienda/maiz','TiendaController@maiz');
Route::post('Tienda/harina','TiendaController@harina');
Route::post('Tienda/panificadoras','TiendaController@panificadoras');
Route::post('Tienda/especializado','TiendaController@especializado');


// rutas para proceso de compras 
Route::get('Tienda/cart','TiendaController@cart'); //ruta del carrito de compras
Route::post('Tienda/ProductsCart','TiendaController@ProductsCart'); //ruta del carrito de compras
Route::post('Tienda/ConfirmacionPedido','TiendaController@ConfirmacionPedido'); //ruta del carrito de compras

