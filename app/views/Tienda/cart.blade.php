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
          /*tr:nth-child(even){background-color: #F9F9F9; border-top: 5px solid #EAEAEA; border-bottom: : 5px solid #EAEAEA; border-right: 5px solid white;}   
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
        }*/
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
          .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
   background-color: white;
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
    </style>

</head>

    <body style="background-color: white;">
        <div id="wrapper">

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
            <div class="col-md-12">
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display bold">Carrito de compras</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Datos para envió</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Datos del pago</h3></a>
                <span class="glyphicon glyphicon-chevron-right"></span>
                <a class="lista-menu-tienda estilo-input" href=""><h3 class="display">Confirmación de pedido</h3></a>
            </div>
        </div> 
        <br>
        <div class="row">
      
            <div class="col-xs-12">
                <div class="table-responsive" >
                    <table id="table" class="table table-striped ">
                      <thead>
                        <tr>
                          <th  >Producto</th>
                          <th style="text-align: center;">Cantidad</th>
                          <th style="text-align: center;">Precio</th>
                          <th style="text-align: center;"></th>
                        </tr>
                      </thead>
                      <tbody class="products" style="text-align: center;">
                      </tbody>
                    </table>
                </div>
            <!-- /.table-responsive -->
            </div>
            <div class="col-xs-2"></div>
        </div>
      

      <div class="row" style="background-color: gainsboro;">
          <div class="col-xs-6">
          </div>
          <div class="col-xs-3">
             <p class="display">Subtotal</p>
             <p class="subtotal display"></p>
             <br>
             <p class="display">I.V.A.</p>
             <p class="iva display"></p>
             <br>
             <p class="display">Gastos de envío</p>
             <p class="envio display"></p>
             <br>
             <hr>
             <p class="display">Total</p>
             <p class="total display"></p>
          </div>
          <div class="col-xs-3">
                <a href="{{URL::to('Tienda/RegistroUser')}}" id="comprar" class="btn btn-naranja-modal">HACER PEDIDO</a>
            <br>
            <br>
            <a href="{{URL::to('Tienda/productos')}}"><p style="color:#FD9C1C;">Seguir comprando</p></a>
          </div>

      <br>
      <br>
      <br>
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

   
    var contador = 0;
    var envio = 0;
    for (x=0; x<=localStorage.length-1; x++)  {  
        clave = localStorage.key(x); 
        console.log(clave + "=" + localStorage.getItem(clave));  

    $.ajax({
        type: "post", 
        url: "ProductsCart", 
        data: ({id : clave, cantidad : localStorage.getItem(clave)}),
        cache: false,
        dataType: "json",
            success: function (data) { 
              console.log(data);
                // $.each(data, function(i, item) {
                //     console.log(item);
                var precio_unitario = parseInt(data.precio_unitario);
                contador = contador + (precio_unitario * localStorage.getItem(data.id));
                envio = envio + parseInt(localStorage.getItem(data.id));
                console.log(localStorage.getItem(data.id));
                $(".products").append("<tr><td><img width='50px' style='background-color:#F9F9F9;     padding: 5px;' src='http://tienda.rmingredientes.com/"+data.imagen+"'><h2 class='text-center' style='font-size:24px;     margin-top: -56px; color:#FD9C1C;' class='display'>"+data.nombre+"</h2><p class='text-center' style='font-size:10px;'>"+data.descripcion_corta+"</p></td><td style='text-align:center;' ><p style='padding:2px; background-color:gray;'>"+localStorage.getItem(data.id)+"</p></td><td> $"+data.precio_unitario+"</td><td> <input type='button' class='"+data.id+" lista-menu-tienda estilo-input' value='x' name='eliminar'><input id='"+data.id+"' value='"+data.id+"' type='hidden' name='valor'></td></tr>");
                // $(".products").append("");
                // $(".products").append("");
                // $(".products").append("");
                // $(".products").append("");
                // console.log(contador);
                $(".subtotal").text("$" + contador.toFixed(2));
                var subtotal = parseInt(contador);
                localStorage.setItem('subtotal',subtotal);
                $(".iva").text("$" + (contador * .16).toFixed(2));
                var iva = parseInt(contador * .16);
                localStorage.setItem('iva',iva);
                $(".envio").text("$" + (envio * 70).toFixed(2));
                var envio1 = parseInt(envio * 70);
                localStorage.setItem('envio1',envio1);
                $(".total").text("$" + (subtotal + iva + envio1).toFixed(2));
                var total = subtotal + iva + envio1;
                localStorage.setItem('total',total);
                // });
                
                $("."+data.id).click(function(){
                  alert("hola");
                  var id = $("#"+data.id).val();
                  console.log(id);
                  localStorage.removeItem(data.id);
                  window.location.reload();
                });
              // });

              },
            error: function (data) {
                $(".products").append("<tr>Ocurrio un error. ¡Intentalo de nuevo!</tr>");
              }
            });
      };
});



</script>

</body>

</html>


