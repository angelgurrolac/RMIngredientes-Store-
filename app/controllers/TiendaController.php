<?php

class TiendaController extends \BaseController {

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
		$categorias = Categorias::All();
		$productos = Productos::All();
		$mensaje = 0;
		return View::make('Tienda.productos',compact('categorias','productos','mensaje'));
	}

	public function productosC()
	{
		$productos = Productos::where('id_categoria','=',Input::get('categoria'))->get();
		// $categorias = Categorias::All();
		return Response::json($productos);	
	}

	public function maiz(){
		$categoria = Input::get('cat');
		$maiz = Productos::maiz($categoria)->get();
		$categorias = Categorias::All();
		$mensaje = 1;
		return View::make('Admin.productos',compact('maiz','categorias','mensaje'));
	}

}
