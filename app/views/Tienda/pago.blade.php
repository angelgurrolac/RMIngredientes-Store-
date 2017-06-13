<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Tienda - RMIngredientes - Pago</title>

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
          .mastercard{
            margin-top: 1%;
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
          <p class="display categoria-cart ">Datos del pago</p>
          <span class="glyphicon glyphicon-chevron-right"></span>
          <p class="display subcategoria-cart ">Confirmación de pedido</p>
        </div>
      </div> 
      <br>

      <div class="row">
        <div class="col-lg-2 col-md-2 col-xs-12"></div>
        <div class="col-lg-4 col-md-4 col-xs-12">
         <button id="tarjeta-visa" class="button-e width">
           <img class="visa img-responsive display pull-left" src="https://rmingredientes.com/public/assets/img/visa.png">
           <img class="mastercard visa img-responsive display pull-left" src="https://rmingredientes.com/public/assets/img/mastercard.png">
           <p class="display">Visa y MasterCard</p>
         </button>
         <div class="visa-card tarjeta" style="
         border: 2px solid #EAEAEA; ">
         <div class="visa-card">
          {{Form::open(array('url'=>'/Tienda/PagoFinal','id' => 'card-form'))}}
          <span class="card-errors"></span>
          <div class="row">
            <div class="col-md-1 col-lg-1 col-xs-12"></div>
            <div class="col-md-7 col-lg-7 col-xs-12">
              <label>
                <span>Número de la tarjeta</span>
                <input class="form-control without-radius" type="tel" size="20" data-conekta="card[number]" name="number" required>
              </label>
            </div>
            <div class="col-md-4 col-lg-4 col-xs-12"></div>
          </div>
          <div class="row">
            <div class="col-md-1 col-lg-1 col-xs-12"></div>
            <div class="col-md-11 col-lg-11 col-xs-12">
             <span>Fecha de caducidad</span>
           </div>
           <div class="col-md-1 col-lg-1 col-xs-12"></div>
           <div class="col-md-4 col-lg-4 col-xs-12">
            <label>
              <select class="form-control without-radius" data-conekta="card[exp_month]" name="month" id="expiry-month" required>
                <option>Mes</option>
                <option value="01">Ene</option>
                <option value="02">Feb</option>
                <option value="03">Mar</option>
                <option value="04">Abr</option>
                <option value="05">May</option>
                <option value="06">Jun</option>
                <option value="07">Jul</option>
                <option value="08">Ago</option>
                <option value="09">Sep</option>
                <option value="10">Oct</option>
                <option value="11">Nov</option>
                <option value="12">Dic</option>
              </select>
            </label>
          </div>
          <div class="col-md-4 col-lg-4 col-xs-12">
           <select class="form-control without-radius" data-conekta="card[exp_year]" name="year" required>
            <option value="16">Año</option>
            <option value="17">2017</option>
            <option value="18">2018</option>
            <option value="19">2019</option>
            <option value="20">2020</option>
            <option value="21">2021</option>
            <option value="22">2022</option>
            <option value="23">2023</option>
            <option value="23">2024</option>
            <option value="23">2025</option>
          </select>
        </div>
        <div class="col-md-3 col-lg-3 col-xs-12"></div>
      </div>
      <div class="row">
       <div class="col-md-1 col-lg-1 col-xs-12"></div>
       <div class="col-md-11 col-lg-11 col-xs-12">
         <span>Código de seguridad(CVC)</span>
       </div>
       <div class="col-md-1 col-lg-1 col-xs-12"></div>
       <div class="col-md-4 col-lg-4 col-xs-6">
        <label>

          <input class="form-control without-radius" type="text" size="4" data-conekta="card[cvc]" name="cvc" required>
          <input type="hidden" name="subtotal" id="subtotal">
          <input type="hidden" name="iva" id="iva">
          <input type="hidden" name="envio1" id="envio1">
          <input type="hidden" name="total" id="total">
          <input type="hidden" name="productos" id="products">
          <input type="hidden" name="cantidad" id="cantidad">
          <input type="hidden" name="correo" id="correo">
          <input type="hidden" name="tarjeta" id="tarjeta">
        </label>
      </div>
      <div class="col-md-3 col-lg-3 col-xs-6">
        <a href="#" data-toggle="tooltip" data-placement="top" title="Son los 3 últimos dígitos del número impreso, en el reverso de la tarjeta.">¿Qué es?</a>
      </div>
      <div class="col-md-4 col-lg-4 col-xs-12"></div>
    </div>
    <div class="row">
      <div class="col-md-1 col-lg-1 col-xs-12"></div>
      <div class="col-md-9 col-lg-9 col-xs-12">
        <label>
          <span>Titular de la tarjeta</span>
          <input class="form-control without-radius" type="text" size="20" data-conekta="card[name]" name="name" required>
        </label>
      </div>
      <div class="col-md-2 col-lg-2 col-xs-12"></div>

    </div>
    <div class="row">
        <div class="col-md-1 col-lg-1 col-xs-12"></div>
        <div class="col-md-6 col-lg-6 col-xs-12">
           {{ Form::submit('REALIZAR PAGO', array('name'=> 'pago','class' => 'display btn btn-naranja-modal realizar')) }}
    {{Form::close()}}

        </div>
        <div class="col-md-5 col-lg-5 col-xs-12">
        <br>
          <a class="seguir-c" href="{{URL::to('Tienda/RegistroUser')}}"><p class="seguir-comprando">Regresar</p></a>
        </div>
    </div>
   
    <br>
  </div>
</div>
<br>
<br>
<button id="tarjeta-oxxo" class="button-e width">
  <img class="visa img-responsive display pull-left" src="https://rmingredientes.com/public/assets/img/oxxo.png">
  <p class="display">Oxxo</p>
</button>

<div class="oxxo-card tarjeta" style="border: 2px solid #EAEAEA; ">
<div class="oxxo-card">
  <div class="row">
        <div class="col-md-1 col-lg-1 col-xs-12"></div>
        <div class="col-md-6 col-lg-6 col-xs-12">
        <br>
          {{Form::open(array('url'=>'/Tienda/PagoFinal1','id' => 'card-form1'))}}
     {{ Form::submit('REALIZAR: PAGO', array('name'=> 'pago','class' => 'display btn btn-naranja-modal realizar')) }}
     {{Form::close()}}

        </div>
        <div class="col-md-5 col-lg-5 col-xs-12">
        <br>
          <a class="seguir-c" href="{{URL::to('Tienda/RegistroUser')}}"><p class="seguir-comprando">Regresar</p></a>
        </div>
    </div>
   
    <br>
</div>
</div>

</div>

<div class="col-lg-4 col-md-4 col-xs-12" style="background-color: #F9F9F9;">
<div class="text-center ">
                <p class="text-resumen">Resumen de tu compra</p>
                <div class="products" style="background-color: white;">
                <br>
                </div>
                <div class="col-md-offset-2 col-md-8 col-lg-8 col-xs-12">
                  <div class="row total-pago">
                  <br>
                    <p class="display pull-left">Total</p>
                    <p class="total display pull-right"></p>
                  </div>
                </div>
              </div>
</div>
<div class="col-lg-2 col-md-2 col-xs-12"></div>
</div>
<div class="row">
  <div class="col-lg-2 col-md-2 col-xs-12"></div>
  <div class="col-lg-4 col-md-4 col-xs-12"></div>
  <div class="col-lg-4 col-md-4 col-xs-12" style="text-align: right;">
  <br>
    <p class="display">¿Tienes alguna duda? 618 126 8430&nbsp;</p>&nbsp;<img src="https://rmingredientes.com/public/assets/img/whatsapp-rmingredientes.png" alt="WhatsApp RM Ingredientes" width="30px">
  </div>
  <div class="col-lg-2 col-md-2 col-xs-12"></div>
</div>

</div> <!-- Fin Container -->

<br>
<br>
<div  id="fixed-bar"> </div>
<!-- /#wrapper -->


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


<script type="text/javascript" >
  Conekta.setPublishableKey('key_EbYxsWv74txNNyrJsWTwr3g');
  // Conekta.setLanguage("es");  

  var conektaSuccessResponseHandler = function(token) {
    var $form = $("#card-form");
    //Inserta el token_id en la forma para que se envíe al servidor
    $form.append($("<input type='hidden' name='conektaTokenId' id='conektaTokenId'>").val(token.id));
    localStorage.setItem('tarjeta',token.id);
    $form.get(0).submit(); //Hace submit
  };
  var conektaErrorResponseHandler = function(response) {
    var $form = $("#card-form");
    $form.find(".card-errors").text(response.message_to_purchaser);
    $form.find("button").prop("disabled", false);
  };

  //jQuery para que genere el token después de dar click en submit
  $(function () {
    $("#card-form").submit(function(event) {
      var $form = $(this);
      // Previene hacer submit más de una vez
      $form.find("button").prop("disabled", true);
      Conekta.token.create($form, conektaSuccessResponseHandler, conektaErrorResponseHandler);
      //localStorage.setItem('tarjeta',token.id);
      return false;
    });
  });
</script>


<script type="text/javascript">
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
    var array1 = [];
    var array2 = [];

    for (x=0; x<=localStorage.length-1; x++)  {  
      if (localStorage.key(x) != 'contador' && localStorage.key(x) != 'total'
        && localStorage.key(x) != 'correo') {
        clave = localStorage.key(x);
      array1.push(clave);
      array2.push(localStorage.getItem(clave));
      console.log(clave + "=" + localStorage.getItem(clave)); 
      $("#cantidad").val(localStorage.getItem(clave));

      $.ajax({
        type: "post", 
        url: "ProductsCart", 
        data: ({id : clave, cantidad : localStorage.getItem(clave)}),
        cache: false,
        dataType: "json",
        success: function (data) { 
          console.log(data);
              // console.log(localStorage.getItem(clave));
           
              $(".products").append("<div class='row'>");
               $(".products").append("<div class='col-md-1 col-lg-1 col-xs-12'></div>");
                $(".products").append("<div class='col-md-2 col-lg-2 col-xs-4'><img width='40px' style='background-color:#F9F9F9; padding: 5px;' src='https://rmingredientes.com/public/"+data.imagen+"'></div><br>");

              // $(".products").append("<img width='40px' style='background-color:#F9F9F9; padding: 5px;' src='https://rmingredientes.com/public/"+data.imagen+"'>");
              // $(".products").append("</div>");
               $(".products").append("<div class='col-md-2 col-lg-2 col-xs-2'><p class='display'>"+localStorage.getItem(data.id)+"</p></div>");
              $(".products").append("<div class='col-md-7 col-lg-7 col-xs-6'><span><b>"+data.nombre+"</b></span></div><br>");
                  // $(".products").append("</div>");
              
              $(".products").append("</div><br>");
            },
            error: function (data) {
              $(".products").append("<p>Ocurrio un error. ¡Intentalo de nuevo!</p>");
            }
          });
    };  
  };  

  console.log(array1);
  var myJsonString = JSON.stringify(array1);
  $("#products").val(myJsonString);
  console.log(array2);
  var myJsonString2 = JSON.stringify(array2);
  $("#cantidad").val(myJsonString2);

  $(".visa-card").css('display','none');
  $("#tarjeta-visa").click(function(){
    $(".visa-card").toggle(800);
  });


  $(".oxxo-card").css('display','none');
  $("#tarjeta-oxxo").click(function(){
    $(".oxxo-card").toggle(800);
  });

  var total = parseFloat(localStorage.getItem('total'));
  $(".total").text('$'+ (total).toFixed(2));
  $("#total").val(total);
  var correo = localStorage.getItem('correo');
  $("#correo").val(correo);



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


