<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>
    
     <link rel="icon" type="image/png" href="{{asset('assets/img/favicon-rmingredientes.png')}}" />
    <!-- Bootstrap Core CSS -->
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
                <a class="navbar-brand" href="index.html">LOGO</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>{{ Session::get('nombre') }} <i class="fa fa-caret-down"></i>
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
                            <a href="{{URL::to('/Admin/usuarios') }}"><i class="fa fa-dashboard fa-fw"></i> USUARIOS</a>
                        </li>
                        <li>
                            <a href="{{URL::to('/Admin/estadisticas') }}" class="active"><i class="fa fa-dashboard fa-fw"></i> ESTADÍSTICAS</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-6">
                    <h1>ESTADÍSTICAS</h1>
                    <br>
                    <div style="display:inline-block;">
                        <img style="width:30%;" class="img-responsive" src="../assets/img/logo-portada-rmingredientes.png">
                    </div>
                    <div style="display:inline-block;">
                            <h3>PRODUCTO MÁS VENDIDO</h3>
                        @foreach($productos as $key => $value)
                            <h3>{{$value->nombre}}</h3>
                        @endforeach
                    </div>
                    <div>
                        <h3>RESUMEN DE VENTAS DEL MES PASADO</h3>
                        <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NOMBRE</th>
                                            <th>PRODUCTOS COMPRADOS</th>
                                            <th>$</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         

                                @foreach($pedidos as $key => $value)
                                <tr>
                                        <td>{{$value->id}}</td>
                                        <td>{{$value->nombre}} {{$value->ap_paterno}} {{$value->ap_materno}}</td>
                                        <td>{{$value->pnombre}}</td>
                                        <td>{{$value->total}}</td>
                                </tr>
                                 @endforeach
                                      
                                    </tbody>
                                </table>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div style="display:inline-block;">
                        <img style="width:30%;" class="img-responsive" src="../assets/img/logo-portada-rmingredientes.png">
                    </div>
                    <div style="display:inline-block;">
                            <h3>PRODUCTO MENOS VENDIDO</h3>
                            @foreach($productosm as $key => $value)
                            <h3>{{$value->nombre}}</h3>
                            @endforeach
                    </div>
                    <div style="display:inline-block;">
                        <img style="width:30%;" class="img-responsive" src="../assets/img/logo-portada-rmingredientes.png">
                    </div>
                    <div>
                        <h2 style="display:inline-block;">2345</h2><span> VISITAS A LA PÁGINA</span>
                    </div>
                    <div style="display:inline-block;">
                            <h3>CLIENTE CON MÁS COMPRAS</h3>
                            @foreach($cliente as $key => $value)
                            <h3>{{$value->nombre}} {{$value->ap_paterno}} {{$value->ap_materno}}</h3>
                            @endforeach
                    </div>
                    <div>
                        <ul>
                            <li style="display:inline-block;">
                                <img style="width:30%;" class="img-responsive" src="../assets/img/logo-portada-rmingredientes.png">
                                <p> 
                                @foreach($pagos as $key => $value)
                                    <h3>{{$value->tarjeta}}%</h3>
                                @endforeach
                                </p>
                            </li>
                            <li style="display:inline-block;">
                                <img style="width:30%;" class="img-responsive" src="../assets/img/logo-portada-rmingredientes.png">
                                 <p> 
                                @foreach($pagos as $key => $value)
                                    <h3>{{$value->efectivo}}%</h3>
                                @endforeach
                                </p>
                            </li>
                            <li style="display:inline-block;">
                                <img style="width:30%;" class="img-responsive" src="../assets/img/logo-portada-rmingredientes.png">
                                 <p> 
                                @foreach($pagos as $key => $value)
                                    <h3>{{$value->oxxo}}%</h3>
                                @endforeach
                                </p>
                            </li>
                       </ul>
                    </div>
                    <div style="display:inline-block;">
                            <h3>TORTILLAS DE MAÍZ</h3>
                            <h3>SECCIÓN MÁS VISITADA</h3>
                    </div>
                </div>
            </div>
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


