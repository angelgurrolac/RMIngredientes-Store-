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
                        <a class="menu-tienda" id="conocenos" href="#conocenos2">CONÓCENOS</a>
                        <hr id="hr-conocenos" class="menutext">

                    </li>
                    <li class="page-scroll li-separation">
                        <a class="menu-tienda" id="productos" href="#portfolio">PRODUCTOS</a>
                        <hr id="hr-productos" class="menutext">
                    </li>
                    <li class="page-scroll li-separation">
                        <a class="menu-tienda" id="demostraciones" href="#demostracion">DEMOSTRACIONES</a>
                        <hr id="hr-demostraciones" class="menutext">
                    </li>
                    <li class="page-scroll li-separation">
                        <a class="menu-tienda" id="contacto" href="#contactanos">CONTACTO</a>
                        <hr id="hr-contacto" class="menutext">
                    </li>
                      <li class="page-scroll li-separation glyphicon glyphicon-shopping-cart size-cart">
                        <a class="menu-tienda" id="#" href="#"></a>
                        
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
                  <li>
                   CATEGORÍAS
                  </li>
                  <li>
                    <a class="lista-menu" href=""> Tortillas de Maíz</a>
                  </li>
                  <li>
                    <a class="lista-menu"  href="">Tortillas de Harina</a>
                  </li>
                  <li>
                    <a class="lista-menu"  href="" >Panificadoras</a>
                  </li>
                  <li>
                    <a class="lista-menu"  href="">Especializado</a>
                  </li>
                </ul>
              </div>
              <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
          </nav>

          <div id="page-wrapper">
            <div class="row align-items-center">
              <div class="col-lg-4">
                <h1 class=" titulos-secciones">PRODUCTOS</h1>
              </div><!-- /.col-lg-6 -->
              <div class="col-lg-6">
               <div class="input-group margen-elementos">
                <span class="input-group-btn btn-buscar ">
                  <button class="btn btn-buscar glyphicon glyphicon-search" type="button"></button>
                </span>
                <input type="text" class="form-control input-buscar" placeholder="BUSCAR PRODUCTO">
              </div><!-- /input-group -->
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-2">

              <button data-toggle="modal" data-target="#myModal" type="button" class="btn btn-crud btn-sm margen-elementos"><span class="glyphicon glyphicon-plus"></span></button>
              

            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
          <!-- /.row -->
          <div class="row">

            <div class="table-responsive" style="overflow: hidden;">
              <table class="table ">
                <thead class="encabezados-tabla">
                  <tr>
                    <th class="text-center">PRODUCTO</th>
                    <th class="text-center">DESCRIPCIÓN</th>
                    <th class="text-center">MODO DE EMPLEO</th>
                    <th class="text-center">BENEFICIOS</th>
                    <th class="text-center">PRECIOS</th>
                    <th class="text-center">CATEGORIA</th>
                    <th class="text-center">IMAGEN</th>
                    <th class="text-center">ACCIONES</th>
                  </tr>
                </thead>
                <tbody>
                 
                </tbody>
              </table>
            </div>
            <!-- /.table-responsive -->

          </div>
          <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

      </div>
    
<div  id="fixed-bar"> </div>
<!-- /#wrapper -->

<script src="{{ URL::asset('assets/js/menu.js') }}"></script>
<!-- jQuery -->
<script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>


<script src="{{ URL::asset('assets/js/menu.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('assets/dist/js/sb-admin-2.js') }}"></script>

<script type="text/javascript">
$(document).ready(function(){
    @foreach($categorias as $key => $value)
        $("#{{$value->id}}").click(function(){
    $.ajax({
   url: '/Tienda/productos',
   type: 'POST',
   data: {categoria:'{{$value->id}}'},
   dataType: 'JSON',
   error: function() {
      console.error("error");
   },
   success: function(respuesta) {
      console.log(JSON.stringify(respuesta));
    
      if (respuesta) {
                      var html = '<div>';
                      html += '<ul>';
                      html += '<li> Legajo: ' + respuesta.nombre + ' </li>';
                      html += '<li> Nombre: ' + respuesta.detalles + ' </li>';
                      html += '</ul>';
                      html += '</div>';
                      $("#respuesta").html(html);
                   } else {
                      $("#respuesta").html('<div> No hay ningún empleado con ese legajo. </div>');
                   }
   }
})
});
        // alert('enter');
    @endforeach
});
</script>

</body>

</html>


