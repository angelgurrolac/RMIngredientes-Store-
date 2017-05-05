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
                      <div class="col-lg-4">
                        <h1 class=" titulos-secciones">ESTADÍSTICAS</h1>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-2">

                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
                <div class="row">
                    <div class="col-lg-5 fondo-paneles">
                        @foreach($productos as $key => $value)
                        <div class="col-lg-2">
                            <img width="60px" height="100px" src="{{asset($value->imagen)}}" alt="producto">
                        </div>
                        <div class="col-lg-10">
                            <p class="estilo-estadistica">PRODUCTO(S) MÁS VENDIDO(S)</p>
                            <p class="producto-vendido">{{$value->nombre}}</p>
                            @endforeach
                        </div>                
                    </div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-5 fondo-paneles">
                        @foreach($productosm as $key => $value)
                     <div class="col-lg-2">
                        <img width="60px" height="100px" src="{{asset($value->imagen)}}" alt="producto">
                    </div>
                    <div class="col-lg-10">
                        <p class="estilo-estadistica">PRODUCTO(S) MENOS VENDIDO(S)</p>
                        
                        <p class="producto-vendido">{{$value->nombre}}</p>
                        @endforeach
                    </div> 

                </div>
                <br>

                <!-- /#page-wrapper -->
            </div>
            <br>
            <div class="row ">
                <div class="col-lg-5 fondo-paneles">
                    <div class="col-lg-2">
                     <span class="glyphicon glyphicon-user icono-usuario"></span>
                 </div>
                 <div class="col-lg-10">
                    <p class="estilo-estadistica">CLIENTE CON MÁS COMPRAS</p>
                    @foreach($cliente as $key => $value)
                    <p class="producto-vendido">{{$value->nombre}} {{$value->ap_paterno}} {{$value->ap_materno}}</p>
                    @endforeach
                </div>        

            </div>
            <div class="col-lg-1"></div>

            <div class="col-lg-5 fondo-paneles">
             <div class="col-lg-2">
                <img width="60px" height="100px" src="../assets/img/demolpan-rmingredientes.png" alt="producto">
            </div>
            <div class="col-lg-10">
                <p class="estilo-estadistica">SECCIÓN MÁS VISITADA</p>

                <p class="producto-vendido">TORTILLAS DE MAÍZ</p>

            </div> 

        </div>
       

        <!-- /#page-wrapper -->

    </div>
    <br>
    <div class="row ">
  
          <div class="col-lg-5 fondo-paneles">
           <p class="estilo-estadistica">RESUMEN DE VENTAS DEL MES PASADO</p>
           <table class="table "> 
           <thead class="tabla-estadisticas"> 
                <tr> 
                    <th class="text-center">#</th> 
                    <th class="text-center">NOMBRE</th> 
                    <th class="text-center">PRODUCTOS COMPRADOS</th> 
                    <th class="text-center">$</th> 
                </tr> 
            </thead> 
            <tbody class="tabla-est"> 


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
        <div class="col-lg-1"></div>

        <div class="col-lg-5 fondo-paneles">
        <br>
            <div class="col-lg-12">

                <div class="col-lg-4 text-center pagos">
                    <img width="67px" height="32px" src="../assets/img/visa.png" alt="VISA">
                    @foreach($pagos as $key => $value)
                    <p class="producto-vendido">{{$value->visa}}%</p>
                    @endforeach
                </div>
                <div class="col-lg-4 text-center pagos">
                    <img width="46px" height="32px" src="../assets/img/mastercard.png" alt="MASTERCARD">
                    @foreach($pagos as $key => $value)
                    <p class="producto-vendido">{{$value->mastercard}}%</p>
                    @endforeach 
                </div>
                <div class="col-lg-4 text-center pagos">
                    <img width="46px" height="32px" src="../assets/img/oxxo.png" alt="OXXO">
                    @foreach($pagos as $key => $value)
                    <p class="producto-vendido">{{$value->oxxo}}%</p>
                    @endforeach
                </div>

            </div> 

        </div>
     

        <!-- /#page-wrapper -->

    </div>   
    <div class="row ">
       
                <div class="col-lg-5 fondo-paneles">
           
        </div>

   
    <div class="col-lg-1">
        
    </div>
    <div class="col-lg-5 fondo-paneles">
         <div class="col-lg-2 pagos">
                @foreach($visitas as $key => $value)    
                <p class="producto-vendido">{{$value->num}}</p>
                @endforeach
            </div>
            <div class="col-lg-10 pagos">                       
                <p class="estilo-estadistica ">VISITAS A LA PÁGINA</p>
            </div>        

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


