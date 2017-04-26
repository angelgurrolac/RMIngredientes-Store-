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

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{asset('assets/img/logo-rmingredientes.png')}}" alt=""></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>Administrador <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
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
<!-- <div class="row row-white2"></div>
<div class="row color-degradado2"> </div> -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{URL::to('/Admin/productos') }}"><i class="fa fa-dashboard fa-fw"></i> PRODUCTOS</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/Admin/pedidos') }}"><i class="fa fa-dashboard fa-fw"></i> ENVÍOS</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/Admin/usuarios') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> USUARIOS</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/Admin/estadisticas') }}"><i class="fa fa-dashboard fa-fw"></i> ESTADÍSTICAS</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">PRODUCTOS</h1>
                </div>
                <div class="input-group custom-search-form">
                	<button class="btn btn-default" type="button">
                			<i class="fa fa-search"></i>
                	</button>
                	<input type="text" class="form-control" placeholder="BUSCAR PRODUCTO">
                	<span class="input-group-btn">
                	</span>
                </div>
            </div>
            <!-- /.row -->
             <div class="row">
                    <div class="panel panel-default">
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>PRODUCTO</th>
                                            <th>DESCRIPCIÓN</th>
                                            <th>MODO DE EMPLEO</th>
                                            <th>BENEFICIOS</th>
                                            <th>PRECIOS</th>
                                            <th>IMAGEN</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($productos as $key => $value)
							             <tr>
							                <td>{{$value->nombre}}</td>
							                <td>{{$value->detalles}}</td>
							                <td>{{$value->modo_empleo}}</td>
							                <td>{{$value->beneficios}}</td>
							                <td>{{$value->precio_unitario}}</td>
							                <td>{{$value->imagen}}</td>
							           </tr>
							           @endforeach
									</tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
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


