<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tienda - RMIngredientes - Error</title>

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
     </div>

      <div class="container">
       <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 centrar-subtitulos">
          <p class="display subcategoria-cart ">Carrito de compras</p>
          <span class="glyphicon glyphicon-chevron-right"></span>
          <p class="display subcategoria-cart ">Datos para envío</p>
          <span class="glyphicon glyphicon-chevron-right"></span>
          <p class="display subcategoria-cart ">Datos del pago</p>
          <span class="glyphicon glyphicon-chevron-right"></span>
          <p class="display categoria-cart ">Confirmación de pedido</p>
        </div>
      </div> 
        <br> 
        <div class="row">
            <p class="titulo-error">{{$error}}</p>
            <p class="cuerpo-error">Tu pedido se ha procesado correctamente recibirás una confirmación de compra a tu correo electrónico con los detalles de tu compra y del envío. Si tienes alguna duda o inquietud no dudes en contactarnos al telefono <b>(618 126 8438.)</b></p>
        </div>

      </div> 
      <br>
      <br>

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


