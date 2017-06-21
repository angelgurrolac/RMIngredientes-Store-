<html>
	<head>
		<link href="{{ URL::asset('assets/css/oxxo.css') }}" media="all" rel="stylesheet" type="text/css" />
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
		<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Oxxo - RMIngredientes</title>

  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-rmingredientes.png')}}" />
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/freelancer.css') }}">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/js/notiny-master/notiny-master/dist/notiny.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

	</head>
	<body>
	 <!-- Navigation -->
     <nav class=" navbar-width  navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" style="border-color: white;">
          <span class="sr-only">Toggle navigation</span>
          <span style="background-color: white;" class="icon-bar"></span>
          <span style="background-color: white;" class="icon-bar"></span>
          <span style="background-color: white;" class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="index.html"><img class="estilo-logo" src="{{asset('assets/img/logo-rmingredientes.png')}}" alt="RM Ingredientes"></a>


      </div>
      <!-- /.navbar-header -->

      <ul class="desaparecer nav navbar-top-links navbar-right bajar-barra2">
        <li class="hidden">
          <a href="#page-top"></a>
        </li>
        <li class="page-scroll li-separation desaparecer">
          <a class="menu-tienda" id="conocenos" href="https://rmingredientes.com/#conocenos2">CONÓCENOS</a>
          <hr id="hr-conocenos" class="menutext">

        </li>
        <li class="page-scroll li-separation active desaparecer">
          <a class="menu-tienda" id="productos" href="https://rmingredientes.com/Tienda/productos">PRODUCTOS</a>
          <hr id="hr-productos" class="menutext">
        </li>
        <li class="page-scroll li-separation desaparecer">
          <a class="menu-tienda" id="demostraciones" href="https://rmingredientes.com/#demostracion">DEMOSTRACIONES</a>
          <hr id="hr-demostraciones" class="menutext">
        </li>
        <li class="page-scroll li-separation desaparecer">
          <a class="menu-tienda" id="contacto" href="https://rmingredientes.com/#contactanos">CONTACTO</a>
          <hr id="hr-contacto" class="menutext">
        </li>
       
         <!-- /.dropdown -->
       </ul>

        <!-- /.navbar-top-links -->
        <div class="row row-white"></div>
        <div class="row color-degradado"> </div>

        <div class="navbar-default sidebar sidebar-height" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="categorias-movil   nav " id="side-menu">

             <li class="sin-borde-li active">
              <a class="lista-menu-tienda2 estilo-input"  href="https://rmingredientes.com/#conocenos2">CONÓCENOS</a>
            </li>
            <li class="sin-borde-li active">

             <a class="lista-menu-tienda2 estilo-input"  href="https://rmingredientes.com/Tienda/productos">PRODUCTOS</a>
           </li>
           <li class="sin-borde-li active">
            <a class="lista-menu-tienda2 estilo-input"  href="https://rmingredientes.com/#demostracion">DEMOSTRACIONES</a>

          </li>
          <li class="sin-borde-li active">

           <a class="lista-menu-tienda2 estilo-input"  href="https://rmingredientes.com/#contactanos">CONTACTO</a>

         </li>
         <br>
         <br>
       </ul>
       <!-- Fin categoria movil -->

     </div>
     <!-- /.sidebar-collapse -->
   </div>
   <!-- /.navbar-static-side -->
 </nav>
		<div class="opps">
			<div class="opps-header">
				<div class="opps-reminder" style="background-color: #FD9C1C;">Ficha digital. No es necesario imprimir.</div>
				<div class="opps-info">
					<div class="opps-brand"><img src="{{asset('assets/img/oxxopay_brand.png')}}" alt="OXXOPay"></div>
					<img src="https://rmingredientes.com/public/index/img/logo-rmingredientes.png" alt="RM Ingredientes" style="width: 10%; ">
					<div class="opps-ammount">
						<h3>Monto a pagar</h3>
						<h2>${{$total}}.00 <sup>MXN</sup></h2>
						<p>OXXO cobrará una comisión adicional al momento de realizar el pago.</p>
					</div>
				</div>
				<div class="opps-reference text-center">
					<h3>Referencia</h3>
					<img src="{{$barcode_url}}" alt="barras">
					<p class="codigo text-center">{{$barcode}}</p>
				</div>
			</div>
			<div class="opps-instructions">
				<h3>Instrucciones</h3>
				
				<p>Hola.</p>
				<ol>
				<li>Para realizar tu pago en la tienda <strong> Oxxo</strong> favor de seguir los siguientes pasos:
</li>
				<li>Acude a la tienda OXXO más cercana.</li>
				<li>Indica en caja que quieres realizar un pago de <strong> OXXOPay. </strong></li>
				<li> Dicta al cajero el <strong>número de referencia</strong>  que viene en la Ficha Digital para que tecleé directamente en la pantalla de venta.
</li>
<li>Realizar el pago correspondiente con dinero en efectivo.</li>
				<li> Al confirmar tu pago, el cajero te entregará un comprobante impreso. En él podrás <strong> verificar que se haya realizado correctamente.</strong> Conserva este comprobante de pago.</li>

				<li>Toma una fotografía al comprobante de pago para enviarlo al siguiente número: (618) 126 8438. Puedes hacerlo por mensaje de texto o por la aplicación Whastapp.
Con esto nosotros podremos checar cuando se vea reflejado el pago y continuar con el proceso de envío.</li>
</ol>
<br>
<p>Nuevamente, muchas gracias por confiar en <strong>RM Ingredientes.</strong> </p>
				
				<!-- <div class="opps-footnote">Al completar estos pasos recibirás un correo de <strong>Nombre del negocio</strong> confirmando tu pago.</div> -->
			</div>
		</div>	
		<!-- jQuery -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.3.2/js/conekta.js"></script>

<script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/conekta.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('assets/dist/js/sb-admin-2.js') }}"></script>

<script src="{{ URL::asset('assets/js/notiny-master/notiny-master/dist/notiny.js') }}"></script>

<!-- <script src="{{ URL::asset('assets/js/jquery.card.js') }}"></script> -->
		<script type="text/javascript">
		 // seccion de conocenos
		  $(document).ready(function(){
        localStorage.clear();
  $("#conocenos").hover(function(){
    $("#hr-conocenos").removeClass("menutext");
    $("#hr-conocenos").addClass("menutext2");
  }, function(){
    $("#hr-conocenos").addClass("menutext");
    $("#hr-conocenos").removeClass("menutext2");
  });
  // seccion de productos
  $("#productos").hover(function(){
    $("#hr-productos").removeClass("menutext");
    $("#hr-productos").addClass("menutext2");
  }, function(){
    $("#hr-productos").addClass("menutext");
    $("#hr-productos").removeClass("menutext2");
  });
  // seccion de demostraciones
  $("#demostraciones").hover(function(){
    $("#hr-demostraciones").removeClass("menutext");
    $("#hr-demostraciones").addClass("menutext2");
  }, function(){
    $("#hr-demostraciones").addClass("menutext");
    $("#hr-demostraciones").removeClass("menutext2");
  });
  // seccion de contacto
  $("#contacto").hover(function(){
    $("#hr-contacto").removeClass("menutext");
    $("#hr-contacto").addClass("menutext2");
  }, function(){
    $("#hr-contacto").addClass("menutext");
    $("#hr-contacto").removeClass("menutext2");
  });
  });



</script>
	</body>
</html>