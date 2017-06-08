<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>TIENDA - RMIngredientes</title>

  <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-rmingredientes.png')}}" />
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="{{ URL::asset('assets/css/freelancer.css') }}">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{ asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/js/notiny-master/notiny-master/dist/notiny.css') }}" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <style>
          ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
            color: #7A7A7A !important;
            font-size: 14px;
            font-family: Tahoma, Verdana, Segoe, sans-serif;
          }
          ::-moz-placeholder { /* Firefox 19+ */
            color: #7A7A7A !important;
            font-size: 14px;
            font-family: Tahoma, Verdana, Segoe, sans-serif;
          }
          :-ms-input-placeholder { /* IE 10+ */
            color: #7A7A7A !important;
            font-size: 14px;
            font-family: Tahoma, Verdana, Segoe, sans-serif;
          }
          :-moz-placeholder { /* Firefox 18- */
            color: #7A7A7A !important;
            font-size: 14px;
            font-family: Tahoma, Verdana, Segoe, sans-serif;
          }
          tr:nth-child(even){background-color: #F9F9F9; border-top: 5px solid #EAEAEA; border-bottom: : 5px solid #EAEAEA; border-right: 5px solid white;}   
          table {
            border:none;
            border-collapse: collapse;
          }

          table td {
            border-left: 5px solid #ffffff;
            border-right: 5px solid #ffffff;
            border-bottom: 5px solid #eaeaea;
          }

          table td:first-child {
            border-left: none;
          }

          table td:last-child {
            border-right: none;
          }
          .display{
            display: inline-block;
          }
          .glyphicon-chevron-right{
            margin: 0 1%;
          }
          .bold{
            font-weight: bold;
            font-size: 26px;
          }
          .regresar-carrito{
            margin-right: 6%; 
            margin-top: 2%;
            text-decoration: none !important;
            cursor: pointer;
            color: #FD9C1C;
          }
        </style>

      </head>

      <body style="background-color: white;">
       <div id="wrapper" >

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
          <a class="menu-tienda" id="conocenos" href="http://rmingredientes.com/#conocenos2">CONÓCENOS</a>
          <hr id="hr-conocenos" class="menutext">

        </li>
        <li class="page-scroll li-separation active desaparecer">
          <a class="menu-tienda" id="productos" href="http://tienda.rmingredientes.com/Tienda/productos">PRODUCTOS</a>
          <hr id="hr-productos" class="menutext">
        </li>
        <li class="page-scroll li-separation desaparecer">
          <a class="menu-tienda" id="demostraciones" href="http://rmingredientes.com/#demostracion">DEMOSTRACIONES</a>
          <hr id="hr-demostraciones" class="menutext">
        </li>
        <li class="page-scroll li-separation desaparecer">
          <a class="menu-tienda" id="contacto" href="http://rmingredientes.com/#contactanos">CONTACTO</a>
          <hr id="hr-contacto" class="menutext">
        </li>
        <a class="menu-tienda" id="cart" href="{{URL::to('Tienda/cart')}}">
          <li class="page-scroll li-separation-cart glyphicon glyphicon-shopping-cart size-cart">
           <span id="contador" class="badge badge-2"></span></a>

         </li>
         <!-- /.dropdown -->
       </ul>
       <ul class="carro-cel pull-right" style="display: inline-block;">
         <a class="" id="cart" href="{{URL::to('Tienda/cart')}}">
          <li class="li-separation-cart glyphicon glyphicon-shopping-cart size-cart">

            <span id="contador2" class="badge badge-2"></span></a>

          </li>
        </ul>
        <!-- /.navbar-top-links -->
        <div class="row row-white"></div>
        <div class="row color-degradado"> </div>

        <div class="navbar-default sidebar sidebar-height" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="categorias-movil   nav " id="side-menu">

             <li class="sin-borde-li active">
              <a class="lista-menu-tienda2 estilo-input"  href="http://rmingredientes.com/#conocenos2">CONÓCENOS</a>
            </li>
            <li class="sin-borde-li active">

             <a class="lista-menu-tienda2 estilo-input"  href="http://tienda.rmingredientes.com/Tienda/productos">PRODUCTOS</a>
           </li>
           <li class="sin-borde-li active">
            <a class="lista-menu-tienda2 estilo-input"  href="http://rmingredientes.com/#demostracion">DEMOSTRACIONES</a>

          </li>
          <li class="sin-borde-li active">

           <a class="lista-menu-tienda2 estilo-input"  href="http://rmingredientes.com/#contactanos">CONTACTO</a>

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

</div>

        <div class="container">
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12 centrar-subtitulos">
            <p class="display subcategoria-cart  ">Carrito de compras</p>
              <span class="glyphicon glyphicon-chevron-right"></span>
              <p class="display categoria-cart ">Datos para envío</p>
              <span class="glyphicon glyphicon-chevron-right"></span>
              <p class="display subcategoria-cart ">Datos del pago</p>
              <span class="glyphicon glyphicon-chevron-right"></span>
              <p class="display subcategoria-cart ">Confirmación de pedido</p>
            </div>
          </div> 
          <br>
          <div class="row">
            {{Form::open(array('url'=>'/Tienda/AddUser'))}}
            <div class="col-md-4 col-xs-12 col-lg-4">
              <p class="datos-formulario">Nombre</p>
              <input class="form-control without-radius fondo-cajas-texto" type="text" name="nombre">
            </div>
            <div class="col-md-4 col-xs-12 col-lg-4">
              <p class="datos-formulario">Apellido Paterno</p>
              <input class="form-control without-radius fondo-cajas-texto" type="text" name="a_paterno">
            </div>
            <div class="col-md-4 col-xs-12 col-lg-4"> 
              <p class="datos-formulario">Apellido Materno</p> 
              <input class="form-control without-radius fondo-cajas-texto" type="text" name="a_materno">
            </div>
          </div>
          <div class="row">
            <row class="col-md-6 col-xs-12 col-lg-6">
              <p class="datos-formulario">Dirección</p>
              <input class="form-control without-radius fondo-cajas-texto" type="text" name="direccion">
            </row>
            <row class="col-md-6 col-xs-12 col-lg-6">
              <p class="datos-formulario">Teléfono</p>
              <input class="form-control without-radius fondo-cajas-texto" type="text" name="telefono">
            </row>
          </div>
          <div class="row">
            <div class="col-md-4 col-xs-6 col-lg-4" >
              <p class="datos-formulario ">C.P.</p>
              <input class="form-control without-radius fondo-cajas-texto" type="number" name="cp">
            </div>
            <div class="col-md-4 col-xs-6 col-lg-4">
              <p class="datos-formulario">Edad</p>
              <input class="form-control without-radius fondo-cajas-texto" type="number" name="edad">
            </div>
            <div class="col-md-4 col-xs-12 col-lg-4"> 
              <p class="datos-formulario">Sexo</p> 
              <select class="form-control without-radius fondo-cajas-texto" name="sexo">
                <option value="volvo">FEMENINO</option>
                <option value="saab">MASCULINO</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-xs-12 col-lg-12">
              <p class="datos-formulario">Correo Electrónico</p> 
              <input id="correo" class="form-control without-radius fondo-cajas-texto" type="email" name="correo">
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6 col-xs-12 col-lg-6">
              <p class="display">¿Tienes alguna duda? 618 126 8430&nbsp;</p><img src="http://tienda.rmingredientes.com/assets/img/whatsapp-rmingredientes.png" alt="WhatsApp RM Ingredientes" width="30px">
            </div>
            <div class="col-md-3 col-xs-12 col-lg-3">
              <a class="display  regresar-carrito" href="">Regresar al carrito</a>
            </div>
            <div class="col-md-3 col-xs-12 col-lg-3">
              {{ Form::submit('CONTINUAR: PAGO', array('id'=>'aceptar','name'=> 'add','class' => 'display btn btn-naranja-modal pull-right')) }}
              {{Form::close()}}
              
            </div>
          </div>
        </div> 

        <div  id="fixed-bar"> </div>
        <!-- /#wrapper -->


        <!-- jQuery -->
        <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

        <!-- Custom Theme JavaScript -->
        <script src="{{ URL::asset('assets/dist/js/sb-admin-2.js') }}"></script>

        <script src="{{ URL::asset('assets/js/notiny-master/notiny-master/dist/notiny.js') }}"></script>

        <script type="text/javascript">
          $(document).ready(function(){

            $("#aceptar").click(function(){
              var correo =  $("#correo").val();
              localStorage.setItem('correo',correo);
            })

  // seccion de conocenos
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


