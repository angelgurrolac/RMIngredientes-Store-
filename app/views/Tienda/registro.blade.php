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

    <body>
        <div id="wrapper">

          <!-- Navigation -->
          <nav class="navbar-width  navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html"><img class="estilo-logo" src="{{asset('assets/img/logo-rmingredientes.png')}}" alt="RM Ingredientes"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right bajar-barra2">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll li-separation ">
                        <a class="menu-tienda" id="conocenos" href="http://rmingredientes.com/#conocenos2">CONÓCENOS</a>
                        <hr id="hr-conocenos" class="menutext">

                    </li>
                    <li class="page-scroll li-separation active">
                        <a class="menu-tienda" id="productos" href="#portfolio">PRODUCTOS</a>
                        <hr id="hr-productos" class="menutext">
                    </li>
                    <li class="page-scroll li-separation">
                        <a class="menu-tienda" id="demostraciones" href="http://rmingredientes.com/#demostracion">DEMOSTRACIONES</a>
                        <hr id="hr-demostraciones" class="menutext">
                    </li>
                    <li class="page-scroll li-separation">
                        <a class="menu-tienda" id="contacto" href="http://rmingredientes.com/#contactanos">CONTACTO</a>
                        <hr id="hr-contacto" class="menutext">
                    </li>
                      <li class="page-scroll li-separation-cart glyphicon glyphicon-shopping-cart size-cart">
                        <a class="menu-tienda" id="cart" href="{{URL::to('Tienda/cart')}}"><span id="contador" class="badge"></span></a>
                        
                    </li>
                <li>
                <!-- /.dropdown-user -->
              </li>
              <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="row row-white"></div>
            <div class="row color-degradado"> </div>
          </nav>
      </div>

      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Carrito de compras</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display bold">Datos para envió</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Datos del pago</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Confirmación de pedido</h3></a>
            </div>
        </div> 
        <br>
        <div class="row">
          {{Form::open(array('url'=>'/Tienda/AddUser'))}}
          <div class="col-md-4">
              <h4>Nombre</h4>
              <input class="form-control without-radius" type="text" name="nombre">
          </div>
          <div class="col-md-4">
              <h4>Apellido Paterno</h4>
              <input class="form-control without-radius" type="text" name="a_paterno">
          </div>
          <div class="col-md-4"> 
              <h4>Apellido Materno</h4> 
              <input class="form-control without-radius" type="text" name="a_materno">
          </div>
        </div>
        <div class="row">
            <row class="col-md-6">
                <h4>Dirección</h4>
                <input class="form-control without-radius" type="text" name="direccion">
            </row>
            <row class="col-md-6">
                <h4>Teléfono</h4>
                <input class="form-control without-radius" type="text" name="telefono">
            </row>
        </div>
        <div class="row">
            <div class="col-md-4">
              <h4>C.P.</h4>
              <input class="form-control without-radius" type="number" name="cp">
          </div>
          <div class="col-md-4">
              <h4>Edad</h4>
              <input class="form-control without-radius" type="number" name="edad">
          </div>
          <div class="col-md-4"> 
              <h4>Sexo</h4> 
              <select class="form-control without-radius" name="sexo">
                      <option value="volvo">FEMENINO</option>
                      <option value="saab">MASCULINO</option>
                    </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <h4>Correo Electrónico</h4> 
            <input class="form-control without-radius" type="email" name="correo">
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-6">
              <p class="display">¿Tienes alguna duda? 618 126 8430&nbsp;</p><img src="http://tienda.rmingredientes.com/assets/img/whatsapp-rmingredientes.png" alt="WhatsApp RM Ingredientes" width="30px">
          </div>
          <div class="col-md-6">
                {{ Form::submit('CONTINUAR: PAGO', array('name'=> 'add','class' => 'display btn btn-naranja-modal pull-right')) }}
                {{Form::close()}}
                <a class="display pull-right regresar-carrito" href="">Regresar al carrito</a>
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


