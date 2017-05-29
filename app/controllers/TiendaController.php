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
		$titulo = "PRODUCTOS";
		return View::make('Tienda.productos',compact('categorias','productos','mensaje','titulo'));
	}

	public function productosC()
	{
		$productos = Productos::where('id_categoria','=',Input::get('categoria'))->get();
		// $categorias = Categorias::All();
		return Response::json($productos);	
	}

	public function maiz(){
		$categoria = Input::get('cat');
		$maiz = Productos::maiz()->get();
		$categorias = Categorias::All();
		$mensaje = 1;
		$titulo = "TORTILLAS DE MAÍZ";
		return View::make('Tienda.productos',compact('maiz','categorias','mensaje','titulo'));
	}

		public function harina(){
		$categoria = Input::get('cat');
		$maiz = Productos::harina()->get();
		$categorias = Categorias::All();
		$mensaje = 2;
		$titulo = "TORTILLAS DE HARINA";
		return View::make('Tienda.productos',compact('maiz','categorias','mensaje','titulo'));
	}
	public function panificadoras(){
		$categoria = Input::get('cat');
		$maiz = Productos::panificadoras()->get();
		$categorias = Categorias::All();
		$mensaje = 3;
		$titulo = "PANIFICADORAS";
		return View::make('Tienda.productos',compact('maiz','categorias','mensaje','titulo'));
	}
	public function especializado(){
		$categoria = Input::get('cat');
		$maiz = Productos::especializado()->get();
		$categorias = Categorias::All();
		$mensaje = 4;
		$titulo = "ESPECIALIZADO";
		return View::make('Tienda.productos',compact('maiz','categorias','mensaje','titulo'));
	}

	public function cart(){
		return View::make('Tienda.cart');
	}

	public function ProductsCart(){
		$data=Input::all();

		 foreach ($data as $key => $value) {

		 	$producto = Productos::find($value);
		 	return json_encode($producto);
        }
    }
	
	public function email(){
		return View::make('emails.email');
	}
	public function emailEnvio(){
		return View::make('emails.emailEnvio');
	}
	public function emailEntregado(){
		return View::make('emails.emailEntregado');
	}

	public function ConfirmacionPedido(){
			$data=Input::all();

		 foreach ($data as $key => $value) {

		 	return json_encode($value);
        }

	}
	public function RegistroUser(){
		 return View::make('Tienda.registro');
	}
	public function AddUser(){
		$nombre = Input::get('nombre');
		$a_paterno = Input::get('a_paterno');
		$a_materno = Input::get('a_materno');
		$direccion = Input::get('direccion');
		$cp = Input::get('cp');
		$telefono = Input::get('telefono');
		$edad = Input::get('edad');
		$sexo = Input::get('sexo');
		$correo = Input::get('correo');

		$user = new User;
		$user->nombre = $nombre;
		$user->ap_paterno = $a_paterno;
		$user->ap_materno = $a_materno;
		$user->direccion = $direccion;
		$user->codigo_postal = $cp;
		$user->edad = $edad;
		$user->sexo = $sexo;
		$user->telefono = $telefono;
		$user->correo = $correo;
		$user->rol = 2;
		$user->estatus = 1;
		$user->save();

		$pedido = new Pedidos;
		$pedido->id_user = $user->id;
		$pedido->save();

		return Redirect::to('/Tienda/Pago');

	}

	public function PagoFinal(){
		
	}

}
