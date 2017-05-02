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
            <div class="row row-white"></div>
            <div class="row color-degradado"> </div>

            <div class="navbar-default sidebar sidebar-height" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <h3>CATEGORÍAS</h3>
                    <ul class="nav " id="side-menu">
                        @foreach($categorias as $key => $value)
                             <li>
                                <a id="{{$value->id}}" href=""> {{$value->nombre}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                @foreach($productos as $key => $value)
                     <div class="col-md-2">
                    <img class="img-responsive" src="{{asset($value->imagen)}}"/>
                    <h3>{{$value->nombre}}</h3>
                    <P>{{$value->detalles}}</P>
                    <h4>{{$value->precio_unitario}}</h4>
                    </div>
                @endforeach
            </div>
            <div class="row" id="categoria"></div>
   <!-- /.row -->
        </div>
<!-- /#page-wrapper -->

</div>

<!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>

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
        alert('enter');
    @endforeach
});
</script>

</body>

</html>


