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

// Route::get('email', 'TiendaController@email');
// Route::get('emailEnvio', 'TiendaController@emailEnvio');
// Route::get('emailEntregado', 'TiendaController@emailEntregado');

/*Llamadas al controlador Auth*/
Route::get('/','HomeController@showWelcome');
Route::get('login', 'AuthController@showLogin'); // Mostrar login
Route::post('login', 'AuthController@postLogin'); // Verificar datos
Route::get('logout', 'AuthController@logOut'); // Finalizar sesión
Route::get('/index',function()
{   
     return View::make('principal');
}); 

 
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
Route::post('Tienda/ProductsCart','TiendaController@ProductsCart'); //ruta de los productos del carrito de compras
Route::post('Tienda/ConfirmacionPedido','TiendaController@ConfirmacionPedido'); //ruta para confirmar pedido
Route::get('Tienda/RegistroUser','TiendaController@RegistroUser'); //ruta para registro de cliente
Route::post('Tienda/AddUser','TiendaController@AddUser'); //ruta para registro de cliente
Route::get('Tienda/Pago',function()
{
     return View::make('Tienda.pago');
}); //ruta para pago con tarjeta
Route::get('Tienda/success',function()
{
     return View::make('Tienda.success');
}); //ruta para caso exitoso de pago
Route::get('Tienda/error',function()
{
     return View::make('Tienda.error');
}); //ruta para caso fallo de pago
Route::post('Tienda/PagoFinal','TiendaController@PagoFinal');//cargo con tarjeta
Route::post('Tienda/PagoFinal1','TiendaController@PagoFinal1');//cargo con oxxo
Route::get('Tienda/oxxo',function()
{
     return View::make('Tienda.reciboxxo');
}); //vista para el recibo con cargo a oxxo
