<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Zayra Chávez - Angel Gurrola" content="">

    <title>RM Ingredientes</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('index/img/favicon-rmingredientes.png') }}" />

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http:bootswatch.com/flatly/ -->
    <link href="{{asset('index/css/bootstrap.min.css') }}" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="{{asset('index/css/freelancer.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('index/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file: -->
    <!--[if lt IE 9]>
        <script src="https:oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https:oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body id="page-top" class="index">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top">
            <!-- <div class="container"> -->
            <!-- <div class="row"> -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="nav-query navbar-header page-scroll">
                <button type="button" class="navbar-toggle menu-hamburguesa" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#page-top"><img class="img-icon" src="{{asset('index/img/logo-rmingredientes.png') }}"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse font-menu" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll li-separation">
                        <a id="conocenos" href="#conocenos2"><h4>CONÓCENOS</h4></a>
                        <hr id="hr-conocenos" class="menutext">

                    </li>
                    <li class="page-scroll li-separation">
                        <a id="productos" href="#portfolio"><h4>PRODUCTOS</h4></a>
                        <hr id="hr-productos" class="menutext">
                    </li>
                    <li class="page-scroll li-separation">
                        <a id="demostraciones" href="#demostracion"><h4>DEMOSTRACIONES</h4></a>
                        <hr id="hr-demostraciones" class="menutext">
                    </li>
                    <li class="page-scroll li-separation">
                        <a id="contacto" href="#contactanos"><h4>CONTACTO</h4></a>
                        <hr id="hr-contacto" class="menutext">
                    </li>
                    <li class="page-scroll li-separation ">
                        <a id="" href="{{URL::to('Tienda/productos')}}"><span style="color:#EA881D; font-size: 30px;" class="glyphicon glyphicon-shopping-cart"></span></a>
                       
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- </div> -->
            <!-- </div> -->
            <!-- /.container-fluid -->
        </nav>

        <!-- Header -->
        <header class="background-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <img  class="img-responsive logo-portada" src="{{asset('index/img/logo-portada-rmingredientes.png') }}" alt="RM Ingredientes">
                        <img id="soluciones" class="img-responsive" src="{{asset('index/img/soluciones.png') }}" alt="Soluciones Innovadoras">
                    </div>
                </div>
            </div>
        </header>
        <section class="back-conocenos" id="conocenos2">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center font-color-conocenos2 titulo-conocenos">CONÓCENOS</h1>
                    <p class="p-conocenos white">Somos una empresa dedicada a solucionar y mejorar los alimentos (principalmente: tortillerias y  panaderías) para que nuestros clientes tengan disminución de mermas, mayor calidad de sus productos y una disminución considerable en costos.</p>
                </div>
            </div>
            <div class="row">
             <div class="col-md-6">
                 <h1 class="text-center font-color-conocenos titulo-conocenos">MISIÓN</h1>
                 <p class="p-conocenos">
                    Ser un aliado estratégico con nuestros clientes, ayudándoles a alcanzar sus metas de negocio proveyéndoles productos de vanguardia.
                </p>
            </div>
            <div class="col-md-6">
             <h1 class="text-center font-color-conocenos titulo-conocenos">VISIÓN</h1>
             <p class="p-conocenos">
                Ser distribuidor a nivel nacional e internacional reconocido por un buen servicio, rapidez y fácil acceso a nuestros productos.
            </p>
        </div>
    </div>
</div>
</section>
<div class="row color-degradado"> 
</div>
<div class="row row-white"></div>
<!-- Portfolio Grid Section -->
<section id="portfolio" class="fondo-productos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="titulo-productos">Productos</h1>
            </div>
        </div>
        <div class="row">

        </div>
        <br>
        <div class="row">
        <form id="my_form" action="{{URL::to('Tienda/maiz')}}" method="post">
 <input type="hidden" name="cat" value="1" />
            <div class="col-sm-3 portfolio-item">
                <a id="tortillas-maiz" name="maiz" href="javascript:{}" onclick="document.getElementById('my_form').submit(); return false;" class="portfolio-link">
               <!--  <input type="submit" name="maiz" value="Buscar" /> -->
                    <div id="maiz" class="caption img-circle">
                        <div class="caption-content ">
                            <i class="fa"> <img width="50em" src="{{asset('index/img/maiz-hover.png') }}" alt="Maíz"></i>
                        </div>
                    </div>
                    <img src="{{asset('index/img/tortillas-productos.jpg') }}" class="margen-color img-responsive img-circle hover-productos" alt="Tortillas rmingredientes">
                </a>
                <p id="texto-maiz" class="texto-productos">Tortillas<br> de Maíz</p>
            </div>
</form>

     <form id="my_form2" action="{{URL::to('Tienda/harina')}}" method="post">
 <input type="hidden" name="cat" value="2" />
            <div class="col-sm-3 portfolio-item">
                <a id="tortillas-harina" name="harina" href="javascript:{}" onclick="document.getElementById('my_form2').submit(); return false;" class="portfolio-link" >
                    <div id="harina" class="caption img-circle">
                        <div class="caption-content">
                           <i class="fa"> <img width="50em" src="{{asset('index/img/maiz-hover.png') }}" alt="Maíz"></i>
                       </div>
                   </div>
                   <img src="{{asset('index/img/tortillas-harina-productos.jpg') }}" class="margen-color img-responsive img-circle" alt="Tortillas de harina rmingredientes">
               </a>
               <p id="texto-harina" class="texto-productos">Tortillas<br> de Harina</p>
           </div>
</form>

     <form id="my_form3" action="{{URL::to('Tienda/panificadoras')}}" method="post">
 <input type="hidden" name="cat" value="3" />

           <div class="col-sm-3 portfolio-item">
            <a id="panificadoras" name="panificadoras" href="javascript:{}" onclick="document.getElementById('my_form3').submit(); return false;" class="portfolio-link">
                <div id="panificadoras" class="caption img-circle">
                    <div class="caption-content">
                        <i class="fa"> <img width="50em" src="{{asset('index/img/maiz-hover.png') }}" alt="Maíz"></i>
                    </div>
                </div>
                <img src="{{asset('index/img/panificadoras-productos.jpg') }}" class="margen-color img-responsive img-circle" alt="Panificadoras Productos rmingredientes">
            </a>
            <p  id="texto-panificadoras" class="texto-productos">Panificadoras</p>
        </div>

        </form>

            <form id="my_form4" action="{{URL::to('Tienda/especializado')}}" method="post">
 <input type="hidden" name="cat" value="4" />
        <div class="col-sm-3 portfolio-item">
            <a id="especializado" name="especializado" href="javascript:{}" onclick="document.getElementById('my_form4').submit(); return false;" class="portfolio-link">
                <div id="especial" class="caption img-circle">
                    <div class="caption-content">
                     <i class="fa"> <img width="50em" src="{{asset('index/img/maiz-hover.png') }}" alt="Maíz"></i>
                 </div>
             </div>
             <img src="{{asset('index/img/especializado-productos.jpg') }}" class="margen-color img-responsive img-circle" alt="Especializado productos">
         </a>
         <p id="texto-especial" class="texto-productos">Especializado</p>
     </div>
     </form>
 </div>
 <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
     <ul class="list-inline centrar-lista">
        <li >
            <p class="parrafo-productos">DISTRIBUIDOR AUTORIZADO</p>
        </li>
        <li >
            <img src="{{asset('index/img/ningredientes.png') }}" alt="n+ingredientes" width="80%">
        </li>
        <li>
            <img src="{{asset('index/img/logo-oleofinos.png') }}" alt="logo oleofinos" width="80%">
        </li>
    </ul>
</div>
<div class="col-md-1"></div>
</div>
<br>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <center>
        <input type="button" style="background-color: transparent !important; border: none !important;
 color: white !important;  font-family: Tahoma, Verdana, Segoe, sans-serif; font-size: 20px;     outline: transparent;" class="disenio-terminos text-center" onclick="window.open('Terminos-Condiciones-RMIngredientes.pdf')" value="Consulta terminos y condiciones">
 </center>
    </div>
    <div class="col-md-4"></div>
</div>
</div>
</section>
<!-- lineas -->
<div class="row color-fondo-blanco"></div>
<div class="row color-degradado"></div>


<!-- About Section -->
<section class="success" id="demostracion">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 class="titulo-productos">DEMOSTRACIONES</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center video">
                <div id="player"></div>
                <!-- <iframe id="player" style="border-radius: 2%" width='70%' height='400' src='https:www.youtube.com/embed/P-Kq9edwyDs?rel=0&amp;controls=0&amp;showinfo=0' frameborder='0' allowfullscreen></iframe> -->
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <img id="video1"  style="border-radius: 2%" class="img-responsive videos" src="{{asset('index/img/video-maiz.png') }}" alt="">
            </div>
            <div class="col-md-3">
                <img id="video2" style="border-radius: 2%" class="img-responsive videos" src="{{asset('index/img/video-harina.png') }}" alt="">
            </div>
            <div class="col-md-4">
                <h3 id="titulo-video" class="titulo-video">Tortillas de Maíz</h3>
                <p id="descripcion-video" class="descripcion-video">Utilizamos tres de nuestros productos: Mejorador Pailero, Blancoplus y Diprogel. Logrando una tortilla de mejor calidad.</p>
            </div>
            <div class="col-md-1"></div>

        </div>
    </div>
</section>
<div class="row color-degradado"></div>

<!-- Contact Section -->
<section id="contactanos">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="titulo-contactanos">CONTÁCTANOS</h1>
            </div>
        </div>
        <br>
        <div class="row">
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="col-md-6">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls quitar-linea">
                            <label>NOMBRE</label>
                            <input type="text" class="form-control fondo-caja" placeholder=" NOMBRE" id="name" required data-validation-required-message="Por favor ingresa tu nombre">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls quitar-linea">
                            <label>CORREO ELECTRÓNICO</label>
                            <input type="email" class="form-control fondo-caja" placeholder=" CORREO ELECTRÓNICO" id="email" required data-validation-required-message="Por favor ingresa tu email">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls quitar-linea">
                            <label>TELÉFONO</label>
                            <input type="tel" class="form-control fondo-caja" placeholder=" TELÉFONO" id="phone" required data-validation-required-message="Por favor ingresa tu número de telefono">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls quitar-linea">
                            <label>PRODUCTO DE INTERÉS</label>
                            <input type="text" class="form-control fondo-caja" placeholder=" PRODUCTO DE INTERÉS" id="product" required data-validation-required-message="Por favor ingresa al menos un producto">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>


                </div>
                <div class="col-md-6">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls quitar-linea">
                            <label>MENSAJE</label>
                            <textarea rows="9" class="form-control fondo-caja" placeholder=" MENSAJE" id="message" required data-validation-required-message="Por favor ingresa tu mensaje"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline espacio-lista lista-contacto">
                            <li class="espacio-contacto">
                                <p class="parrafo-contacto">Camelias #100 Col. La Virgen 34049 Durango, Dgo.</p>
                            </li>

                            <li class="espacio-contacto">
                                <p class="parrafo-contacto">  ventas@rmingredientes.com</p>
                            </li>
                            <li class="espacio-contacto">
                                <p class="parrafo-contacto">    618 126 8438</p>
                            </li>
                            <li class="espacio-contacto1">
                              <img src="{{asset('index/img/whatsapp-rmingredientes.png') }}" alt="WhatsApp RM Ingredientes" width="50%">
                          </li>
                          <li class="espacio-contacto1">
                            <a href="https:www.facebook.com/RM-Ingredientes-1847550548863220/?fref=ts" target="_blank"><img src="{{asset('index/img/facebook-rmingredientes.png') }}" alt="Facebook RM Ingredientes" width="50%"></a>
                        </li>
                        <li class="espacio-contacto1">
                            <a href="https:www.youtube.com/channel/UC2XSq87TxzW-1bpK9oy-9zw
                            " target="_blank"><img src="{{asset('index/img/youtube-rmingredientes.png') }}" alt="Youtube RM ingredientes" width="50%"></a>
                        </li>
                        <li>
                           <div id="success"></div>
                           <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn-naraja btn btn-success btn-lg">ENVIAR</button>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>

        </div>
    </div>
</form>

</div>
</div>

</section>


<div class="row color-degradado">

</div>
<div class="row color-fondo-blanco">

</div>



<!-- Footer -->
<footer class="text-center">
    <div class="footer-above">
        <!-- <div class="container"> -->
        <div class="row-footer row">
            <div class="footer-col col-md-3">
                            <!-- <h3>Location</h3>
                            <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p> -->
                        </div>
                        <div class="footer-col col-md-6">
                            <img src="{{asset('index/img/logo-rmingredientes-footer.png') }}" alt="Logo RM Ingredientes" width="40%">
                            <ul class="list-inline espacio-lista">
                                <li class="espacio-iconos">
                                    <a href="https:www.facebook.com/RM-Ingredientes-1847550548863220/?fref=ts" target="_blank"><img src="{{asset('index/img/facebook-rmingredientes.png') }}" alt="Facebook RM Ingredientes" width="50%"></a>
                                </li>
                                <li class="espacio-iconos">
                                    <a href="https:www.youtube.com/channel/UC2XSq87TxzW-1bpK9oy-9zw" target="_blank"><img src="{{asset('index/img/youtube-rmingredientes.png') }}" alt="Youtube RM ingredientes" width="50%"></a>
                                </li>
                                <li class="espacio-iconos">
                                    <img src="{{asset('index/img/whatsapp-rmingredientes.png') }}" alt="Youtube RM ingredientes" width="50%">
                                </li>
                                <li>
                                    <p class="parrafo-footer">618 126 8438</p>
                                </li>
                                <li>
                                    <p class="parrafo-footer">rigo880821@gmail.com</p>
                                </li>
                                
                            </ul>
                            <p class="texto-footer">Camelias #100 Col. La Virgen 34049 Durango, Dgo.</p>
                        </div>
                        <div class="footer-col col-md-3  espacio-columna">
                            <ul class="list-inline espacio-lista">
                               <li class="espacio-iconos">
                                <a href="http:www.pastalaboratorio.com/" target="_blank"><img src="{{asset('index/img/logo-pasta-blanco.png') }}" alt="Logo Pasta Laboratorio Creativo"></a>
                            </li>
                            <li class="espacio-iconos">
                                <a href="https:www.facebook.com/PastaLabCreativo/?fref=ts" target="_blank"><img src="{{asset('index/img/facebook-pastalab.png') }}" alt="Facebook Pasta Laboratorio Creativo" width="50%"></a>
                            </li>
                            <li class="espacio-iconos">
                                <a href="https:www.instagram.com/pasta.laboratorio/" target="_blank"><img src="{{asset('index/img/instagram-pastalab.png') }}" alt="instagram Pasta Laboratorio Creativo" width="50%"></a>
                            </li>
                            <li class="espacio-iconos">
                               <a href="https:www.youtube.com/channel/UC2_hnm3Ek7pe2udLr8-RVog" target="_blank"><img src="{{asset('index/img/youtube-pastalab.png') }}" alt="Youtube Pasta Laboratorio Creativo" width="50%"></a>
                           </li>

                       </ul>
                       <p class="texto-footer-pasta">Diseñado por Pasta Laboratorio Creativo 2016</p>
                   </div>
               </div>
               <!-- </div> -->
           </div>
           <div class="footer-below">
           </div>
       </footer>

       <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <!--   <div class="scroll-top page-scroll visible-xs visible-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div> -->

    


<!-- jQuery -->
<script src="{{ URL::asset('index/js/jquery.js') }}"></script>

<!-- API Youtube -->
<script src="http://www.youtube.com/player_api"></script>
<script>
        // create youtube player
        var player;
        var player2;
        function onYouTubePlayerAPIReady() {
            player = new YT.Player('player', {
              height: '315',
              width: '60%',
              videoId: 'InBee79J62E',
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
            player2 = new YT.Player('player2', {
              height: '315',
              width: '60%',
              videoId: 'bQ18EVmbddM',
              events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            }
        });
        }

         // autoplay video
        function onPlayerReady(event) {
            $('#demostraciones').click(
             function(){ 
                player.playVideo();
            })

            $(window).scroll(function(e) {

                var scrollAmount = $('body').scrollTop();   
                console.log(scrollAmount);

                if (scrollAmount == 2233) {
                    player.playVideo();
                    return;
                }
            })

        }

         // when video ends
        function onPlayerStateChange(event) {        
            if(event.data === 0) {  
                player.loadVideoById("bQ18EVmbddM");
            }
        }

    </script>

    <script>
        if (screen.width < 500) {
            document.getElementById('soluciones').src="{{ URL::asset('index/img/soluciones.png') }}";
        }
        else if (screen.width < 1200) {
            document.getElementById('soluciones').src="{{ URL::asset('index/img/soluciones-large.png') }}";
        }
        else {
            document.getElementById('soluciones').src="{{ URL::asset('index/img/soluciones-large.png') }}";
        }
    </script>

    <script>
        $(document).ready(function() {

            var contador = localStorage.getItem('contador');

            $("#")

            $("#tortillas-maiz").click(function() {
                 $.ajax({
                        url: "{{ URL::asset('index/mail/contador.php')}} ",
                        type: 'POST',
                        data: {categoria:1},
                        error: function() {
                           console.error("error");
                        },
                        success: function(respuesta) {
                           console.log(JSON.stringify(respuesta));
                        }
                     })

            });

            $("#tortillas-harina").click(function() {
                 $.ajax({
                        url: "{{ URL::asset('index/mail/contador.php')}} ",
                        type: 'POST',
                        data: {categoria:2},
                        error: function() {
                           console.error("error");
                        },
                        success: function(respuesta) {
                           console.log(JSON.stringify(respuesta));
                        }
                     })
            });
            $("#panificadoras").click(function() {
                 $.ajax({
                        url: "{{ URL::asset('index/mail/contador.php')}} ",
                        type: 'POST',
                        data: {categoria:3},
                        error: function() {
                           console.error("error");
                        },
                        success: function(respuesta) {
                           console.log(JSON.stringify(respuesta));
                        }
                     })
            });
            $("#especializado").click(function() {
                 $.ajax({
                        url: "{{ URL::asset('index/mail/contador.php')}} ",
                        type: 'POST',
                        data: {categoria:4},
                        error: function() {
                           console.error("error");
                        },
                        success: function(respuesta) {
                           console.log(JSON.stringify(respuesta));
                        }
                     })
            });

        });

    </script>



    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('index/js/bootstrap.min.js') }}"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{ URL::asset('index/js/classie.js') }}"></script>
    <script src="{{ URL::asset('index/js/cbpAnimatedHeader.js') }}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{ URL::asset('index/js/jqBootstrapValidation.js') }}"></script>
    <script src="{{ URL::asset('index/js/contact_me.js') }}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('index/js/freelancer.js') }}"></script>

    <!-- funciones hover del menu -->
    <script src="{{ URL::asset('index/js/menu.js') }}"></script>

</body>

</html>
<?php

$con = mysqli_connect("localhost", "root", "admin","rmingredientes");
$hoy = date("Y-m-d");

$consulta_visita_real = "SELECT * FROM visitas WHERE fecha='$hoy' AND ip='".$_SERVER['REMOTE_ADDR']."'";
$rs_visita_real = mysqli_query($con, $consulta_visita_real);
if (mysqli_num_rows($rs_visita_real) == 0) {
 $hoy = date("Y-m-d");
 $insert_real = "INSERT INTO visitas (ip, fecha, num) VALUES ('".$_SERVER['REMOTE_ADDR']."', '$hoy', 1)";
 mysqli_query($con, $insert_real);
}
?>
