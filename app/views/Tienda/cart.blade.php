<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tienda - RMIngredientes - Carrito</title>

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
          
          table {
            border:none;
            border-collapse: collapse;
          }

          table td {
           /* border-left: 2px solid #eaeaea;*/
           /* border-right: 2px solid #eaeaea;*/
           border-bottom: 2px solid #eaeaea;
         }

         table td:first-child {
          border-left: none;
        }

        table td:last-child {
          border-right: none;
        }
        table tr {
          text-align: center;
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
      .producto-table{
        font-size:24px;  
        display:inline-block;
        font-weight: bold;
        color:#FD9C1C;
        text-align: left;

      }
      .producto-t-cart{
        font-size: 18px;
        font-family: Tahoma, Verdana, Segoe, sans-serif !important;
      }
      .precio-table-cart{
        font-size: 26px;
        font-weight: bold;
        font-family: Tahoma, Verdana, Segoe, sans-serif !important;
        color: #444444;

      }
      .cantidad-cart{
        background-color: #f9f9f9;
        width: 40px;
        font-size: 20px;
        text-align: center;
        margin-left: 25px;

      }
      .separador-cart{
        margin-top: 1px;
        margin-bottom: 1px;
        border: 0;
        border-top: 3px solid #7A7A7A;
        margin-left: -20px;
        margin-right: -10px;
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
      <p class="display categoria-cart ">Carrito de compras</p>
      <span class="glyphicon glyphicon-chevron-right"></span>
      <p class="display subcategoria-cart ">Datos para envío</p>
      <span class="glyphicon glyphicon-chevron-right"></span>
      <p class="display subcategoria-cart ">Datos del pago</p>
      <span class="glyphicon glyphicon-chevron-right"></span>
      <p class="display subcategoria-cart ">Confirmación de pedido</p>
    </div>
  </div> 
  <br>
  <div class="row">

    <div class="col-xs-12 col-md-12 col-lg-12">
      <div class="table-responsive" >
        <table id="table" class="table table-striped ">
          <thead class="encabezados-table-cart">
            <tr>
              <th   style="text-align: center;">Producto</th>
              <th  ></th>
              <th >Cantidad</th>
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


  <div class="row" style="background-color: #f9f9f9;">
    
    <div class="col-md-8 col-lg-8 col-xs-12" style="text-align: right;" >
      <div class="row fuente-cart">
         <p class="display interlineado-cart" style="text-align: right; font-weight: bold;">Total</p> &nbsp;<p class="total display interlineado-cart" style="text-align: left; font-weight: bold;"></p>  
    </div>
  </div>

  <div class="col-md-4 col-lg-4 col-xs-12" style="background-color: white;">
   <center>
    <a href="{{URL::to('Tienda/RegistroUser')}}" id="comprar" class="btn btn-naranja-cart">HACER PEDIDO</a>
  </center> 
  <br>
  <br>
  <a class="seguir-c" href="{{URL::to('Tienda/productos')}}"><p class="seguir-comprando">Seguir comprando</p></a>
</div>

<br>
<br>
<br>
</div>
</div>
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
                var precio_unitario = parseFloat(data.precio_unitario);
                var conDecimal = precio_unitario.toFixed(2); 
                contador = contador + (precio_unitario * localStorage.getItem(data.id));
                envio = envio + parseInt(localStorage.getItem(data.id));
                console.log(localStorage.getItem(data.id));
                $(".products").append("<tr><td><img width='50px' style='background-color:#F9F9F9;   display:inline-block;  padding: 5px;' src='http://tienda.rmingredientes.com/"+data.imagen+"'></td><td style='text-align:left;'><p class='producto-table'>"+data.nombre+"</p><p class='producto-t-cart'>"+data.descripcion_corta+"</p></td><td style='text-align:center;' ><p  class='cantidad-cart'>&nbsp;"+localStorage.getItem(data.id)+"</p></td><td class='precio-table-cart'> $"+conDecimal+"</td><td> <input type='button' class='"+data.id+" tachita-cart estilo-input' value='x' name='eliminar'><input id='"+data.id+"' value='"+data.id+"' type='hidden' name='valor'></td></tr>");
                $(".total").text("$" + contador.toFixed(2));
                var total = parseFloat(contador.toFixed(2));
                localStorage.setItem('total',total);

                // $(".iva").text("$" + (contador * .16).toFixed(2));
                // var iva = parseInt(contador * .16);
                // localStorage.setItem('iva',iva);

                // var producto = localStorage.getItem(data.id);
                // if (producto == 17) {
                //   $(".envio").text("$" + (envio * 325).toFixed(2));
                //   var envio1 = parseInt(envio * 325);
                // };

                // $(".envio").text("$" + (envio * 230).toFixed(2));
                // var envio1 = parseInt(envio * 230);
                // localStorage.setItem('envio1',envio1);

                // $(".total").text("$" + (subtotal + iva + envio1).toFixed(2));
                // var total = subtotal + iva + envio1;
                // localStorage.setItem('total',total);
                // });
                
                $("."+data.id).click(function(){
                  // alert("hola");
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


