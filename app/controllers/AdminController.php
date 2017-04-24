<?php

class AdminController extends \BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function ShowProductos()
	{
		$productos=Productos::All();
		return View::make('Admin.productos',compact('productos'));
	}
	public function ShowPedidos()
	{
		$pedidos=Pedidos::All();
		return View::make('Admin.pedidos',compact('pedidos'));
	}

}
