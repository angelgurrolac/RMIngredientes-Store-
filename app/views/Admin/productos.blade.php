<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Productos - RMIngredientes</title>

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
                <a class="navbar-brand" href="index.html"><img class="estilo-logo" src="{{asset('assets/img/logo-rmingredientes.png')}}" alt=""></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle estilo-user" data-toggle="dropdown" href="#">
                        <i class="glyphicon glyphicon-user"></i> Administrador <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user estilo-list-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ action('AuthController@logOut') }}"><i class="fa fa-sign-out fa-fw"></i> Cerrar Sesión</a>
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
           <!--  <div class="row">
                <div class="col-lg-3">
                    <h1 class=" titulos-secciones">PRODUCTOS</h1>
                </div>
                <div class="col-lg-4">
                <div class="input-group">
  <span class="input-group-addon " id="basic-addon1">a</span>
  <input type="text" class="form-control" placeholder="BUSCAR PRODUCTO" aria-describedby="basic-addon1">
</div>
                </div>
                <div class="col-lg-2"></div>
            </div> -->
            <div class="row align-items-center">
  <div class="col-lg-4">
    <h1 class=" titulos-secciones">PRODUCTOS</h1>
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-6  ">
   <div class="input-group margen-elementos">
      <span class="input-group-btn btn-buscar ">
        <button class="btn btn-buscar glyphicon glyphicon-search" type="button"></button>
      </span>
      <input type="text" class="form-control input-buscar" placeholder="BUSCAR PRODUCTO">
    </div><!-- /input-group -->
  </div><!-- /.col-lg-6 -->
  <div class="col-lg-2">
    
    <button type="button" class="btn btn-crud btn-sm margen-elementos"><span class="glyphicon glyphicon-plus"></span></button>
    <button type="button" class="btn btn-crud  btn-sm margen-elementos"><span class="glyphicon glyphicon-pencil"></span></button>
    <button type="button" class="btn btn-crud   btn-sm margen-elementos"><span class="glyphicon glyphicon-trash"></span></button>
    
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
            <!-- /.row -->
             <div class="row">
                   
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead class="encabezados-tabla">
                                        <tr>
                                            <th class="text-center">PRODUCTO</th>
                                            <th class="text-center">DESCRIPCIÓN</th>
                                            <th class="text-center">MODO DE EMPLEO</th>
                                            <th class="text-center">BENEFICIOS</th>
                                            <th class="text-center">PRECIOS</th>
                                            <th class="text-center">IMAGEN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($productos as $key => $value)
							             <tr>
							                <td>{{$value->nombre}}</td>
							                <td>{{$value->detalles}}</td>
							                <td>{{$value->modo_empleo}}</td>
							                <td>{{$value->beneficios}}</td>
							                <td class="text-center">${{$value->precio_unitario}}</td>
							                <td>{{$value->imagen}}</td>
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

    <!-- /#wrapper -->

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


