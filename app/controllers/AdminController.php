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
		$productos=Productos::Productos()->get();
		return View::make('Admin.productos',compact('productos'));
	}
	public function ShowPedidos()
	{
		$pedidos=Pedidos::Pedidos()->get();
		return View::make('Admin.pedidos',compact('pedidos'));
	}
	public function ShowUsuarios()
	{
		$usuarios=User::where('rol','=','2')->get();
		return View::make('Admin.usuarios',compact('usuarios'));
	}	
	public function ShowEstadisticas()
	{
		$productos = Productos::MasVendido()->take(1)->get();
		$productosm = Productos::MenosVendido()->take(1)->get();
		$pedidos = Pedidos::Ventas()->get();
		$cliente = User::MasCompras()->take(1)->get();
		$pagos = Pedidos::TipoPago()->get();
		$visitas = Visitas::VisitasTotal()->get();
		return View::make('Admin.estadisticas',compact('productos','productosm','pedidos','cliente','pagos','visitas'));
	}
	public function ChangePassword(){
		$datos = User::where('nombre','=','Zayra');
		return View::make('Admin.configuracion',compact('datos'));
	}

	public function AgregarP(){
		$nombre = Input::get('nombre');
		$imagen = Input::file('imagen');
		$breved = Input::get('breved');
		$brevec = Input::get('brevec');
		$presentacion = Input::get('presentacion');
		$precio = Input::get('precio');
		$empleo = Input::get('empleo');
		$beneficios = Input::get('beneficios');

		$producto = new Productos;
		if($imagen!=null){
		$name_image = $imagen -> getClientOriginalName();	
		$image_final = 'assets/img/' .$name_image;
		$imagen -> move('assets/img/', $name_image );
		$producto->imagen = $image_final;
		}
		$producto->nombre = $nombre;
		$producto->descripcion_corta = $breved;
		$producto->descripcion_completa = $brevec;
		$producto->presentacion = $presentacion;
		$producto->precio_unitario = $precio;
		$producto->modo_empleo = $empleo;
		$producto->beneficios = $beneficios;
		$producto->estado = 1;
		$producto->contador = 0;
		$producto->id_categoria = 1;
		$producto->save();

		return Redirect::to('Admin/productos');
	}

	public function AgregarU(){
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

		return Redirect::to('Admin/usuarios');
	}

}
