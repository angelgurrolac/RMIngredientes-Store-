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
        .button-e {
          background-color: transparent;
          background-repeat: no-repeat;
          cursor: pointer;
          overflow: hidden;
          outline: none;
          height: 45px;
          line-height: 40px;
          border: 2px solid #EAEAEA;
          display: inline-block;
          float: none;
          text-align: center;
          padding: 0px!important;
          font-size: 14px;
          color: #000;
        }
        .width{
          width: 100%;
        }
        .visa{
              margin-left: 4%;
        }
        .mm{
          padding-left: 0 !important;
        }
        .cvc{
          padding-right: 0 !important;
        }
        .realizar{
          font-size: 16px !important;
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
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Datos para envió</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display bold">Datos del pago</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Confirmación de pedido</h3></a>
            </div>
        </div>
        <br> 
        <div class="row">
            <div class="col-md-offset-2 col-md-4">
                <button id="tarjeta-visa" class="button-e width"><img class="visa img-responsive display pull-left" src="http://tienda.rmingredientes.com/assets/img/visa.png"><p class="display">Visa</p></button>
                <br>
                <br>
                <div class"visa-card tarjeta">
                 <div class="demo-container visa-card">
                  <div class="card-wrapper visa-card"></div>
                  <br>
                  <br>
                  {{Form::open(array('url'=>'/Tienda/PagoFinal'))}}
                  <div class="form-container active visa-card">
                      <input class="form-control without-radius" placeholder="Número Tarjeta" type="tel" name="number">
                      <br>
                      <input class="form-control without-radius" placeholder="Nombre" type="text" name="name">
                      <br>
                      <div class="col-md-6 mm">
                        <input class="form-control without-radius" placeholder="MM/YY" type="tel" name="expiry">
                      </div>
                      <div class="col-md-6 cvc">
                        <input class="form-control without-radius" placeholder="CVC" type="number" name="cvc">
                      </div>
                      <br>
                      <br>
                      <br>
                      <div class="col-md-12 mm">
                         {{ Form::submit('REALIZAR: PAGO', array('name'=> 'pago','class' => 'display btn btn-naranja-modal realizar')) }}
                         <a class="display pull-right regresar-carrito" href="">Regresar</a>
                      </div>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
                <br class="visa-card">
                <br class="visa-card">
                <br class="visa-card">
                <br class="visa-card">
                <button id="tarjeta-master" class="button-e width"><img class="visa img-responsive display pull-left" src="http://tienda.rmingredientes.com/assets/img/mastercard.png"><p class="display">MasterCard</p></button>
                <br>
                <br>
                <div class"master-card tarjeta">
                 <div class="demo-container master-card">
                  <div class="card-wrapper master-card"></div>
                  <br>
                  <br>
                  <div class="form-container active">
                    {{Form::open(array('url'=>'/Tienda/PagoFinal'))}}
                  <div class="form-container active master-card">
                      <input class="form-control without-radius" placeholder="Número Tarjeta" type="tel" name="number">
                      <br>
                      <input class="form-control without-radius" placeholder="Nombre" type="text" name="name">
                      <br>
                      <div class="col-md-6 mm">
                        <input class="form-control without-radius" placeholder="MM/YY" type="tel" name="expiry">
                      </div>
                      <div class="col-md-6 cvc">
                        <input class="form-control without-radius" placeholder="CVC" type="number" name="cvc">
                      </div>
                      <br>
                      <br>
                      <br>
                      <div class="col-md-12 mm">
                         {{ Form::submit('REALIZAR: PAGO', array('name'=> 'pago','class' => 'display btn btn-naranja-modal realizar')) }}
                         <a class="display pull-right regresar-carrito" href="">Regresar</a>
                      </div>
                    {{Form::close()}}
                  </div>
                </div>
              </div>
                <br class="master-card">
                <br class="master-card">
                <br class="master-card">
                <br class="master-card">
                <button class="button-e width"><img class="visa img-responsive display pull-left" src="http://tienda.rmingredientes.com/assets/img/oxxo.png"><p class="display">Oxxo</p></button>
            </div>

        </div>
        <div class="col-md-6">
          <div class="text-center resumen">
            <h3>Resumen de tu compra</h3>
            <div class="productos">
            </div>
            <div class="col-md-offset-2 col-md-8">
              <div class="row">
                  <p class="display pull-left">Subtotal</p>
                  <p class="subtotal display pull-right"></p>
              </div>
             <br>
             <div class="row">
                  <p class="display pull-left">I.V.A.</p>
                  <p class="iva display pull-right"></p>
             </div>
             <br>
             <div class="row">
                  <p class="display pull-left">Gastos de envío</p>
                  <p class="envio display pull-right"></p>
             </div>
             <br>
             <hr>
             <div class="row">
                  <p class="display pull-left">Total</p>
                  <p class="total display pull-right"></p>
             </div>
             </div>
          </div>
        </div>
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

<script src="{{ URL::asset('assets/js/jquery.card.js') }}"></script>
 <script>
        new Card({
            form: document.querySelector('form'),
            container: '.card-wrapper'
        });
    </script>

<script type="text/javascript">
$(document).ready(function(){

    $(".visa-card").css('display','none');
    $(".master-card").css('display','none');
   $("#tarjeta-visa").click(function(){
        $(".visa-card").toggle(800);
    });
$("#tarjeta-master").click(function(){
        $(".master-card").toggle(800);
    });
  var subtotal = parseInt(localStorage.getItem('subtotal'));
  $(".subtotal").text('$'+ (subtotal).toFixed(2));
  var iva = parseInt(localStorage.getItem('iva'));
  $(".iva").text('$'+ (iva).toFixed(2));
  var envio = parseInt(localStorage.getItem('envio1'));
  $(".envio").text('$'+ (envio).toFixed(2));
  var total = parseInt(localStorage.getItem('total'));
  $(".total").text('$'+ (total).toFixed(2));
   

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


