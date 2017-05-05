<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ENVÍOS - RMIngredientes</title>
   <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-rmingredientes.png')}}" />
    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/freelancer.css') }}">

    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('assets/vendor/metisMenu/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('assets/dist/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('assets/vendor/morrisjs/morris.css') }}" rel="stylesheet">

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

            <ul class="nav navbar-top-links navbar-right bajar-barra">
                <li class="dropdown">
                    <a class="dropdown-toggle estilo-user" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> {{ Session::get('nombre')}} <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user estilo-list-user">
                        <li><a class="estilo-lista text-center" href="{{URL::to('/Admin/configuracion') }}"> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a class="estilo-lista text-center" href="{{ action('AuthController@logOut') }}"> Cerrar Sesión</a>
                        </li>
                    </ul>
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
                            <a class="lista-menu" href="{{URL::to('/Admin/productos') }}"> PRODUCTOS</a>
                        </li>
                        <li>
                            <a class="lista-menu"  href="{{URL::to('/Admin/pedidos') }}">ENVÍOS</a>
                        </li>
                        <li>
                            <a class="lista-menu"  href="{{URL::to('/Admin/usuarios') }}" >USUARIOS</a>
                        </li>
                        <li>
                            <a class="lista-menu"  href="{{URL::to('/Admin/estadisticas') }}">ESTADÍSTICAS</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row align-items-center">
              <div class="col-lg-3">
                <h1 class=" titulos-secciones">ENVÍOS</h1>
            </div><!-- /.col-lg-6 -->
            <div class="col-lg-6">
               <div class="input-group margen-elementos">
                  <span class="input-group-btn btn-buscar ">
                    <button class="btn btn-buscar glyphicon glyphicon-search" type="button"></button>
                </span>
                <input type="text" class="form-control input-buscar" placeholder="BUSCAR ENVÍO">
            </div><!-- /input-group -->
        </div><!-- /.col-lg-6 -->
        <div class="col-lg-3">

        </div><!-- /.col-lg-6 -->
    </div><!-- /.row -->
    <!-- /.row -->
    <div class="row">

        <div class="table-responsive" style="overflow: hidden;">
            <table class="table ">
                <thead class="encabezados-tabla">
                    <tr>
                        <th class="text-center">IDENTIFICADOR</th>
                        <th class="text-center">DETALLES DEL PEDIDO</th>
                        <th class="text-center">CLIENTE</th>
                        <th class="text-center">PRECIO TOTAL</th>
                        <th class="text-center">DIRECCIÓN</th>
                        <th class="text-center">FECHA</th>
                        <th class="text-center">ESTATUS</th>
                        <th class="text-center">ACCIÓN</th>
                        

                    </tr>
                </thead>
                <tbody>
                     @foreach($pedidos as $key => $value)
                           <tr>
                              <td>{{$value->id}}</td>
                              <td>{{$value->pnombre}}</td>
                              <td>{{$value->nombre}} {{$value->ap_paterno}} {{$value->ap_materno}}</td>
                              <td>{{$value->total}}</td>
                              <td>{{$value->domicilio}}</td>
                              <td>{{$value->fecha}}</td>
                              <td>{{$value->estatus}}</td>
                              <td><button data-toggle="modal" data-target="#myModal2" type="button" class="btn btn-crud  btn-sm margen-elementos"><span class="glyphicon glyphicon-pencil"></span></button></td>

                         </tr>
                         @endforeach

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

<!-- Modal modificar-->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content contenido-modal">
          <div class="modal-header">
            <h5 class="modal-title titulo-modal" id="exampleModalLabel">Modificar estatus</h5>
          </div>
          <div class="modal-body cuerpo-modal">
            <div class="container-fluid">
              <div class="row"> 
              <div class="col-xs-3"></div>
                 <div class="col-xs-6"></div>
              <select class="form-control without-radius" name="" >
                  <option value="volvo">Estatus</option>
                  <option value="saab">Pendiente</option>
                  <option value="saab">Enviado</option>
                  <option value="saab">Entregado</option>
                  <option value="saab">Cancelado</option>
                </select>
                <div class="col-xs-3"></div>
                
              </div>
          

          </div>  

        </div>
        <div class="modal-footer inferior-modal">
          <button type="button" class="btn btn-verde-modal" data-dismiss="modal">CANCELAR</button>
          <button type="button" class="btn btn-verde-modal">GUARDAR</button>
        </div>
      </div>
    </div>
  </div>


<!-- jQuery -->
<script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ URL::asset('assets/vendor/metisMenu/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ URL::asset('assets/vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ URL::asset('assets/vendor/morrisjs/morris.min.js') }}"></script>
<script src="{{ URL::asset('assets/data/morris-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ URL::asset('assets/dist/js/sb-admin-2.js') }}"></script>

</body>

</html>


