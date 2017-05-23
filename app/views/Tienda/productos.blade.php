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
    </style>

</head>

<body class="body-gris">

    
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
                        <a class="menu-tienda" id="#" href="#"><span id="contador" class="badge"></span></a>
                        
                    </li>

                <li>
               
                
                <!-- /.dropdown-user -->
              </li>
              <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="row row-white"></div>
            <div class="row color-degradado"> </div>

            <div class="navbar-default sidebar sidebar-height" role="navigation">
              <div class="sidebar-nav navbar-collapse">
                <ul class="nav " id="side-menu">
                  <li class="estilo-categoria-titulo sin-borde-li">
                   CATEGORÍAS
                  </li>
                  <li class="sin-borde-li active">
                {{Form::open(array('url'=>'/Tienda/maiz', 'id' => 'maiz'))}}
                <input value="1" type="hidden" name="cat" >
                {{ Form::submit('Tortillas de Maíz', array('name'=> 'maiz','class' => 'lista-menu-tienda estilo-input ')) }}
                {{Form::close()}}
                  </li>
                  <li class="sin-borde-li">
                {{Form::open(array('url'=>'/Tienda/harina', 'id' => 'harina'))}}
                <input value="2" type="hidden" name="cat"  >
                {{ Form::submit('Tortillas de Harina', array('name'=> 'harina','class' => 'lista-menu-tienda estilo-input')) }}
                {{Form::close()}}
                  </li>
                  <li class="sin-borde-li">
                {{Form::open(array('url'=>'/Tienda/panificadoras', 'id' => 'panificadoras'))}}
                <input value="3" type="hidden" name="cat" >
                {{ Form::submit('Panificadoras', array('name'=> 'panificadoras','class' => 'lista-menu-tienda estilo-input')) }}
                {{Form::close()}}
                  </li>
                  <li class="sin-borde-li">
                {{Form::open(array('url'=>'/Tienda/especializado', 'id' => 'especializado'))}}
                <input value="4" type="hidden" name="cat"  >
                {{ Form::submit('Especializado', array('name'=> 'especializado','class' => 'lista-menu-tienda estilo-input')) }}
                {{Form::close()}}
                  </li>
                </ul>
              </div>
              <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
          </nav>

          <div id="page-wrapper">
            <div class="row align-items-center">
             <p class=" titulo-categorias-tienda">{{$titulo}} </p>
              
          </div><!-- /.row -->
          <!-- /.row -->
          <div class="row"> 
          <?php
          $vuelta = 0;
          ?>
          @if ($mensaje == 0)
                @foreach($productos as $key => $value) 
                <?php
                $vuelta++;
                ?>
                     <div class="col-sm-3"> 
                    <a data-toggle="modal" data-target="#myModal" data-nombre = "{{$value->nombre}}"
                       data-desc = "{{$value->descripcion_completa}}" data-presentacion = "{{$value->presentacion}}"
                       data-image = "{{$value->imagen}}" data-modo = "{{$value->modo_empleo}}"
                       data-beneficios ="{{$value->beneficios}}" data-id="{{$value->id}}"
                       data-precio = "{{$value->precio_unitario}}">
                       <div class="fondo-imagenes">
                    <img class="img-responsive centrar " src="{{asset($value->imagen)}}"/> 
                    </div>
                    </a>
                    <div class="informacion-producto">
                    <p class="nombre-producto">{{$value->nombre}}</ph3> 
                    <p class="corta-producto">{{$value->descripcion_corta}}</p> 
                    <p class="unitario-producto" >${{$value->precio_unitario}}</p> 
                    </div>
                    </div> 
                
                @endforeach 
          @endif

          @if ($mensaje == 1)
                @foreach($maiz as $key3 => $value3) 
                     <div class="col-sm-3"> 
                    <a data-toggle="modal" data-target="#myModal" data-nombre = "{{$value3->nombre}}"
                       data-desc = "{{$value3->descripcion_completa}}" data-presentacion = "{{$value3->presentacion}}"
                       data-image = "{{$value3->imagen}}" data-modo = "{{$value3->modo_empleo}}"
                       data-beneficios ="{{$value3->beneficios}}" data-id="{{$value3->id}}"
                       data-precio = "{{$value3->precio_unitario}}">
                        <div class="fondo-imagenes">
                    <img class="img-responsive centrar" src="{{asset($value3->imagen)}}"/> 
                    </div>
                    </a>
                    <div class="informacion-producto">
                    <p class="nombre-producto">{{$value3->nombre}}</p> 
                    <p class="corta-producto">{{$value3->descripcion_corta}}</p> 
                    <p class="unitario-producto">${{$value3->precio_unitario}}</p> 
                    </div>
                    </div> 
                @endforeach 
          @endif
              @if ($mensaje == 2)
                @foreach($maiz as $key4 => $value4) 
                     <div class="col-sm-3"> 
                    <a data-toggle="modal" data-target="#myModal" data-nombre = "{{$value4->nombre}}"
                       data-desc = "{{$value4->descripcion_completa}}" data-presentacion = "{{$value4->presentacion}}"
                       data-image = "{{$value4->imagen}}" data-modo = "{{$value4->modo_empleo}}"
                       data-beneficios ="{{$value4->beneficios}}" data-id="{{$value4->id}}"
                       data-precio = "{{$value4->precio_unitario}}">
                        <div class="fondo-imagenes">
                    <img class="img-responsive centrar" src="{{asset($value4->imagen)}}"/> 
                    </div>
                    </a>
                    <div class="informacion-producto">
                    <p class="nombre-producto">{{$value4->nombre}}</p> 
                    <p class="corta-producto">{{$value4->descripcion_corta}}</p> 
                    <p class="unitario-producto">${{$value4->precio_unitario}}</p> 
                    </div> 
                    </div>
                @endforeach 
          @endif
             @if ($mensaje == 3)
                @foreach($maiz as $key5 => $value5) 
                     <div class="col-sm-3"> 
                    <a data-toggle="modal" data-target="#myModal" data-nombre = "{{$value5->nombre}}"
                       data-desc = "{{$value5->descripcion_completa}}" data-presentacion = "{{$value5->presentacion}}"
                       data-image = "{{$value5->imagen}}" data-modo = "{{$value5->modo_empleo}}"
                       data-beneficios ="{{$value5->beneficios}}" data-id="{{$value5->id}}"
                       data-precio = "{{$value5->precio_unitario}}">
                       <div class="fondo-imagenes">
                    <img class="img-responsive centrar" src="{{asset($value5->imagen)}}"/> 
                    </div>
                    </a>
                    <div class="informacion-producto">
                    <p class="nombre-producto">{{$value5->nombre}}</p> 
                    <p class="corta-producto">{{$value5->descripcion_corta}}</p> 
                    <p  class="unitario-producto">${{$value5->precio_unitario}}</p> 
                    </div>
                    </div> 
                @endforeach 
          @endif
             @if ($mensaje == 4)
                @foreach($maiz as $key6 => $value6) 
                     <div class="col-sm-3"> 
                    <a data-toggle="modal" data-target="#myModal" data-nombre = "{{$value6->nombre}}"
                       data-desc = "{{$value6->descripcion_completa}}" data-presentacion = "{{$value6->presentacion}}"
                       data-image = "{{$value6->imagen}}" data-modo = "{{$value6->modo_empleo}}"
                       data-beneficios ="{{$value6->beneficios}}" data-id="{{$value6->id}}"
                       data-precio = "{{$value6->precio_unitario}}">
                             <div class="fondo-imagenes">
                    <img class="img-responsive centrar" src="{{asset($value6->imagen)}}"/> 
                    </div>
                    </a>
                    <div class="informacion-producto">
                    <p class="nombre-producto">{{$value6->nombre}}</p> 
                    <p class="corta-producto">{{$value6->descripcion_corta}}</p> 
                    <p class="unitario-producto">${{$value6->precio_unitario}}</p> 
                    </div>
                    </div> 
                @endforeach 
          @endif
          
            </div> 
          <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

      </div>


      <!-- Modal productos-->
      
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content contenido-modal">
        <div class="modal-body cuerpo-modal-elimnar">
          <div class="container-fluid">
            <div class="row">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </div>
            <div class="row">
              <div class="col-xs-2"></div>
              <div class="col-xs-8 text-center"><p class="titulo-m-producto" id="nombre"></p></div>
              <div class="col-xs-2"></div>
            </div>
            <div class="row">
              <div class="col-xs-6">
               <div class="fondo-imagenes pull-right">
                <img id="imagen" class="img-responsive centrar" src=""/>
                </div>
              </div>
              <div class="col-xs-6">
                  <p class="texto-descrip" id="desc"></p>
                 <input type="hidden" id="id" name="id">
                  <p class="texto-presen"><b>Presentación:</b><span class="texto-descrip" id="presentacion"></span></p>
                 
                  <p class="texto-presen"><b>Precio:</b></p>
                  <p class="texto-precio" id="precio"></p>
                  <div class="input-group">
                    <span class="input-group-btn">
                      <button style="background-color: #A4BD31; color: white; " type="button" class="btn btn-default btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                        <span class="glyphicon glyphicon-minus"></span>
                      </button>
                    </span>
                    <input id="cantidad" type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                    <span class="input-group-btn">
                      <button style="background-color: #A4BD31; color: white; "  type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[1]">
                        <span class="glyphicon glyphicon-plus"></span>
                      </button>
                    </span>
                  </div>
                  <br>
                  <button id="agregar" type="button" class="btn btn-naranja-modal">AGREGAR AL CARRITO</button>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                   <p class="texto-presen "><b>Modo de Empleo:</b></p>
                   <p class="texto-descrip" id="modo"></p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                   <p class="texto-presen "><b>Beneficios:</b></p>
                   <p class="texto-descrip" id="beneficios"></p>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer inferior-modal-eliminar text-center ">
        <div class="row">
        </div>
        </div>
      </div>
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

    $("#contador").text("");
    var contador = 0;

    $("#agregar").click(function(){
          contador++;
          var id = $("#id").text();
          var cantidad = $("#cantidad").val();
          localStorage.setItem(id, cantidad);
          $.notiny({ text: 'Artículo Agregado', position: 'right-top' });
          $("#contador").text(contador);

    })


      $('#myModal').on('show.bs.modal', function(e) {
    //get data-id attribute of the clicked element
        var id = $(e.relatedTarget).data('id');
        var nombre = $(e.relatedTarget).data('nombre');
        var imagen = $(e.relatedTarget).data('image');
        var precio = $(e.relatedTarget).data('precio');
        var modo = $(e.relatedTarget).data('modo');
        var beneficios = $(e.relatedTarget).data('beneficios');
        var presentacion = $(e.relatedTarget).data('presentacion');
        var desc = $(e.relatedTarget).data('desc');
        $("#myModal #nombre").text(nombre);
        $("#myModal #desc").text(desc);
        $("#myModal #modo").text(modo);
        $("#myModal #id").text(id);
        $("#myModal #beneficios").text(beneficios);
        $("#myModal #presentacion").text(presentacion);
        $("#myModal #precio").text('$' + precio);
        $("#myModal #imagen").attr('src','http://tienda.rmingredientes.com/'+imagen);
        });


      //plugin bootstrap minus and plus
//http://jsfiddle.net/laelitenetwork/puJ6G/
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    
    
});
$(".input-number").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
             // Allow: Ctrl+A
            (e.keyCode == 65 && e.ctrlKey === true) || 
             // Allow: home, end, left, right
            (e.keyCode >= 35 && e.keyCode <= 39)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });

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


