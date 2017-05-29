        <!DOCTYPE html>
        <html lang="en">

        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>ESTADÍSTICAS - RMIngredientes</title>
            
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
  color: #EA881E !important;
  font-size: 20px;
  padding-top: 5px !important;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #EA881E !important;
  font-size: 20px;
  padding-top: 5px !important;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #EA881E !important;
  font-size: 20px;
  padding-top: 5px !important;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
:-moz-placeholder { /* Firefox 18- */
  color: #EA881E !important;
  font-size: 20px;
  padding-top: 5px !important;
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
                      <div class="col-lg-4">
                        <h1 class=" titulos-secciones">CONFIGURACIÓN</h1>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-2">

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->

                  <div class="container">
    <div class="row">
      <div class="col-md-3">
        

      </div>
      <div class="col-md-5 fondo-paneles">
      <br>
        <p class="estilo-estadistica">CAMBIAR CONTRASEÑA</p>
        @if($respuesta == 1)
            <h1>Correcto</h1>
        @endif
         @if($respuesta == 2)
            <h1>Incorrecto</h1>
        @endif
         @if($respuesta == 3)
            <h1>No coinciden</h1>
        @endif
        <br>
           <div class="form-group">
            {{ Form::open(['url' => '/Admin/GuardarContrasena','files'=>'true']) }}

            <input id="value2" type="hidden" name="id" value="{{ Session::get('nombre')}}">
   
    <input name="actual" type="password" class="form-control" placeholder="CONTRASEÑA ACTUAL">
  </div>
  <div class="form-group">
 
    <input name="nueva" type="password" class="form-control" placeholder="NUEVA CONTRASEÑA">
  </div>
   <div class="form-group">
 
    <input name="nueva2" type="password" class="form-control" placeholder="CONFIRMAR NUEVA CONTRASEÑA">
  </div>
  <br>

  {{ Form::submit('CAMBIAR', array('name'=> 'save','class' => 'btn btn-verde-confi pull-right')) }}</td> 
  {{Form::close()}}

      </div>
      <div class="col-md-4"></div>
    </div>
        
    </div>
</div>
</div>

<div  id="fixed-bar"> </div>

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


