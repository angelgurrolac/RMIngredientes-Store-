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
		$categorias = Categorias::All();
		return View::make('Admin.productos',compact('productos','categorias'));
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
		$secciones = Categorias::Mas()->take(1)->get();
		return View::make('Admin.estadisticas',compact('productos','productosm','pedidos','cliente','pagos','visitas','secciones'));
	}
	
	public function ChangePassword(){
		$respuesta = 0;
		return View::make('Admin.configuracion',compact('respuesta'));
	}


	public function GuardarContrasena(){

		$usuario = User::where('nombre','=',Input::get('id'))->first();
    	$antiguo = Input::get('actual');
    	$nuevo = Input::get('nueva');
    	$nuevo2 = Input::get('nueva2');
    	
    	if ($nuevo == $nuevo2) {
		    		if(Hash::check($antiguo,$usuario->password))
		    	{
		    		$usuario->password = Hash::make($nuevo);
		    		$usuario->save();
		    		$respuesta = 1;
		    		return View::make('Admin.configuracion',compact('respuesta'));
		    	}
		    	else
		    	{
		    		$respuesta = 2;
		    		return View::make('Admin.configuracion',compact('respuesta'));
		    	}
    	}

    	else
		    	{
		    		$respuesta = 3;
		    		return View::make('Admin.configuracion',compact('respuesta'));
		    	}
    	
	}

	public function EditarPedido(){

		if (Input::has('Editar')) 
		{
			$pedidos = Pedidos::find(Input::get('id_pedido'));
			$estatus = Input::get('estatus2');
			$pedidos->estatus = $estatus;
			$pedidos->save();
			return Redirect::to('/Admin/pedidos');
		}
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
		$categoria = Input::get('categoria');
		$categoria2 = Input::get('categoria2');

		$producto = new Productos;
		if($imagen!=null){
		$name_image = $imagen -> getClientOriginalName();	
		$image_final = 'assets/img/' .$name_image;
		$imagen -> move('public/assets/img/', $name_image );
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
		$producto->id_categoria = $categoria;
		$producto->id_categoria2 = $categoria2;
		$producto->save();

		return Redirect::to('Admin/productos');
	}

	public function EditarP(){
			if(Input::has('Editar'))
		{
			$nombre = Input::get('nombreE');
		$imagen = Input::file('imagenE');
		$breved = Input::get('brevedE');
		$brevec = Input::get('brevecE');
		$presentacion = Input::get('presentacionE');
		$precio = Input::get('precioE');
		$empleo = Input::get('empleoE');
		$beneficios = Input::get('beneficiosE');
		$categoria = Input::get('categoriaE');
		$categoria2 = Input::get('categoriaE2');
		$productoE = Productos::find(Input::get('id_productoE'));

			if($imagen!=null){
		$name_image = $imagen -> getClientOriginalName();	
		$image_final = 'assets/img/' .$name_image;
		$imagen -> move('public/assets/img/', $name_image );
		$productoE->imagen = $image_final;
		}

		$productoE->nombre = $nombre;
		$productoE->descripcion_corta = $breved;
		$productoE->descripcion_completa = $brevec;
		$productoE->presentacion = $presentacion;
		$productoE->precio_unitario = $precio;
		$productoE->modo_empleo = $empleo;
		$productoE->beneficios = $beneficios;
		$productoE->estado = 1;
		$productoE->contador = 0;
		$productoE->id_categoria = $categoria;
		$productoE->id_categoria2 = $categoria2;
		$productoE->save();
			return Redirect::to('/Admin/productos');
		}
		elseif (Input::has('Eliminar')) 
		{
			$producto = Productos::find(Input::get('id_producto'));
			$producto->delete();
			return Redirect::to('/Admin/productos');
		}

	}

	public function EditarU(){
		if(Input::has('Editar'))
		{
		$nombre = Input::get('nombre2');
		$ap_paterno = Input::get('a_paterno2');
		$ap_materno = Input::get('a_materno2');
		$direccion = Input::get('direccion2');
		$correo = Input::get('correo2');
		$cp = Input::get('cp2');
		$telefono = Input::get('telefono2');
		$edad = Input::get('edad2');
		$sexo = Input::get('sexo2');


		$user = User::find(Input::get('id_user2'));
		$user->nombre = $nombre;
		$user->ap_paterno = $ap_paterno;
		$user->ap_materno = $ap_materno;
		$user->direccion = $direccion;
		$user->correo = $correo;
		$user->codigo_postal = $cp;
		$user->telefono = $telefono;
		$user->edad = $edad;
		$user->sexo = $sexo;
		$user->rol = 2;
		$user->estatus = 1;
		$user->save();
			return Redirect::to('/Admin/usuarios');
		}
		elseif (Input::has('Eliminar')) 
		{
			$user = User::find(Input::get('id_user'));
			$user->delete();
			return Redirect::to('/Admin/usuarios');
		}

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
