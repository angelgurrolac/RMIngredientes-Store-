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
		date_default_timezone_set('America/Mexico_City');
        $hora = date('H:i:s');

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
		$pedido->domicilio = $direccion;
		$pedido->hora = $hora;
		$pedido->save();

		return Redirect::to('/Tienda/Pago');

	}

	public function PagoFinal(){
		$numeroT = Input::get('number');
		$correo = Input::get('correo');
		$nameC = Input::get('name');
		$fechaExpiracion = Input::get('expiry');
		$cvc = Input::get('cvc');
		$subtotal = Input::get('subtotal');
		$iva = Input::get('iva');
		$envio1 = Input::get('envio1');
		$total = Input::get('total');
		$number = Input::get('number');
		$prueba = Input::get('prueba');
		$tipo_pago1 = substr($numeroT, 0,1);
		if ($tipo_pago1 == 4) {
			$tipo_pago = 'visa';
		}
		if ($tipo_pago1 == 5) {
			$tipo_pago = 'mastercard';
		}
		$producto = Input::get('productos');
		$cantidad = Input::get('cantidad');
		// $productos = explode( ',', $producto);
		$productos = json_decode($producto);
		$cantidades = json_decode($cantidad);
		// $a = array();
		// array_push($a,$productos);
		// $cantidades = explode( ',', $cantidad);
		// $b = array();
		// array_push($b,$cantidades);

		$user = User::where('correo','=',$correo)->first();
		$pedido = Pedidos::where('id_user','=',$user->id)->first();
        $pedido->subtotal = $subtotal;
        $pedido->iva = $iva;
        $pedido->costo_envio = $envio1;
        $pedido->total = $total;
        $pedido->tipo_pago = $tipo_pago;
        $pedido->save();
		
        for ($i=0; $i < count($productos); $i++) { 
		 	$detalles = new DetallesPedidos;
		 	$detalles->id_pedido = $pedido->id;
		 	$detalles->id_producto = $productos[$i];
			$detalles->cantidad = $cantidades[$i];
		 	$detalles->subtotal = $pedido->subtotal;
		 	$detalles->save();
        }

        Conekta::setApiKey("key_yE35Jxrq4zyFT6yJ6hbj7g");
        Conekta::setLocale('ES');

 
        try {
        
            $charge = Conekta_Charge::create(
            	array(
            	"id" => "ord_2fw8EWJusiRrxdPzT",
            	"object" => "order",
            	"livemode" => false,
            	"amount" => 35000,
            	"amount_refunded" => 0,
            	"payment_status" => "paid",
            	"currency" => "MXN",
            	"customer_info" => array(
            		"object" => "customer_info",
            		"customer_id" => "cus_zzmjKsnM9oacyCwV3",
            		"name" => "Mario Perez",
            		"email" => "usuario@example.com",
            		"phone" => "+5215555555555"
            	),
            	"created_at" => 1485842107,
            	"updated_at" => 1485842112,
            	"line_items" => array(
            		"object" => "list",
            		"has_more" => false,
            		"total" => 1,
            		"data" => array(
            			"id" => "line_item_2fw8EWJusiRrxdPzR",
            			"object" => "line_item",
            			"name" => "Box of Cohiba S1s",
            			"unit_price" => 35000,
            			"quantity"=> 1,
            			"parent_id" => "ord_2fw8EWJusiRrxdPzT"
            	)),
            	"charges" => array(
            		"object" => "list",
            		"has_more" => false,
            		"total" => 1,
            		"data" => array(
            			"id" => "589026bbedbb6e56430016ad",
            			"object" => "charge",
            			"livemode" => false,
            			"created_at" => 1485842107,
            			"status" => "paid",
            			"amount" => 35000,
            			"paid_at" => 1485842112,
            			"currency" => "MXN",
            			"fee" => 1467,
            			"customer_id" => "",
            			"order_id" => "ord_2fw8EWJusiRrxdPzT",
            			"payment_method" => array(
            				"object" => "card_payment",
            				"type" => "credit",
            				"name" => "Jorge Lopez",
            				"exp_month" => "12",
            				"exp_year" => "19",
            				"auth_code" => "490884",
            				"last4" => "4242",
            				"brand" => "visa",
            				"issuer" => "",
            				"account_type" => "",
            				"country" => "US",
            				"fraud_score" => 29
            			)
            		)
            	)
  ));}
         catch (Conekta_Error $e) {

           return Response::json($e->getMessage());

        }
        return Response::json($charge->status);

        // return Redirect::to('/Tienda/productos');

       
	}

	}
