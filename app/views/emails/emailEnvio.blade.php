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
          footer .footer-above {
            padding-top: 50px;
            /* background-color: #2c3e50; Original */
            background-color: #444444;
          }
          .parrafo-footer{
            font-size: 18px;
            color: #A4BD32;
          }
          .parrafo-footer-naranja{
            font-size: 18px;
            color: #FD9C1C;
          }
          .deg{  
            padding: 10px 0 !important;
            background: -moz-linear-gradient(45deg, rgba(253,156,28,1) 0%, rgba(253,156,28,1) 57%, rgba(139,179,0,1) 100%); /* ff3.6+ */
            background: -webkit-gradient(linear, left bottom, right top, color-stop(0%, rgba(253,156,28,1)), color-stop(57%, rgba(253,156,28,1)), color-stop(100%, rgba(139,179,0,1))); /* safari4+,chrome */
            background: -webkit-linear-gradient(45deg, rgba(253,156,28,1) 0%, rgba(253,156,28,1) 57%, rgba(139,179,0,1) 100%); /* safari5.1+,chrome10+ */
            background: -o-linear-gradient(45deg, rgba(253,156,28,1) 0%, rgba(253,156,28,1) 57%, rgba(139,179,0,1) 100%); /* opera 11.10+ */
            background: -ms-linear-gradient(45deg, rgba(253,156,28,1) 0%, rgba(253,156,28,1) 57%, rgba(139,179,0,1) 100%); /* ie10+ */
            background: linear-gradient(45deg, rgba(253,156,28,1) 0%, rgba(253,156,28,1) 57%, rgba(139,179,0,1) 100%); /* w3c */
            filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#8BB300', endColorstr='#FD9C1C',GradientType=1 ); /* ie6-9 */
          }
          .gris{  
            padding: 7px 0 !important;
            background-color: #F4F4F4;
          }
          .encabezados-tabla{
            background-color: #FD9C1C;
            font-family: font-family: Tahoma, Verdana, Segoe, sans-serif;
            font-size: 18px;
            color: white;
            text-align: center;
          }
          .mensaje-general{
            font-size: 20px;
            font-family: Tahoma, Verdana, Segoe, sans-serif;

          }
          .detalles-pedido{
            font-size: 20px;
            font-family: Tahoma, Verdana, Segoe, sans-serif;
            font-weight: bold;

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
          .table-striped > tbody > tr:nth-child(2n+1) > td, .table-striped > tbody > tr:nth-child(2n+1) > th {
           background-color: white;
         }
       </style>

     </head>

     <body style="overflow-x: hidden;">
      <div class="row">
        <div class="col xs-12" style="background-color: #FD9C1C;">

          <img class=" img-responsive center-block" width="183px" src="http://rmingredientes.com/assets/img/logo-rmingredientes.png" alt="RM Ingredientes">

        </div>
        <div class="row gris"> </div>
        <div class="row deg"> </div>
      </div>


      <div class="row">
        <div class="col-xs-2"></div>
        <div class="col-xs-8">
          <br>
          <p class="mensaje-general">Buen día, tenemos buenas noticias para ti. Muy pronto estarás recibiendo tu pedido realizado en RM Ingredientes. A continuación te proporcionamos la información que necesitas para rastrear tu envío.
          </p>
          <br> 
          <p class="detalles-pedido" style="display: inline-block;" >Fecha de Envío:</p><p class="mensaje-general" style="display: inline-block;" >&nbsp;  03/Mayo/2017</p>
          <br>
          <p class="detalles-pedido" style="display: inline-block;" > No. de Pedido:</p><p style="display: inline-block;" class="mensaje-general"> &nbsp;1</p>
          <br>
          <p class="detalles-pedido" style="display: inline-block;" >Envío por:</p><p style="display: inline-block;" class="mensaje-general">&nbsp;FEDEX</p>
          <br>
          <br>
          <p class="mensaje-general">
            Muchas gracias por confiar en RM Ingredientes.</p>

          </div>
          <div class="col-xs-2"></div>
          <br>
          <br>

        </div>
        <br>

        <!-- Footer -->
        <footer class="text-center">
          <div class="footer-above">
            <!-- <div class="container"> -->
            <div class="row-footer row">
              <div class="footer-col col-xs-3">
                            <!-- <h3>Location</h3>
                            <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p> -->
                          </div>
                          <div class="footer-col col-md-6">
                            <img src="http://rmingredientes.com/assets/img/logo-rmingredientes-footer.png" alt="Logo RM Ingredientes" width="40%">
                            
                            
                          </div>
                          <div class="footer-col col-md-3  espacio-columna">


                          </div>
                        </div>
                        <div class="row-footer row">
                         <ul class="list-inline espacio-lista">
                           <li>
                            <p class="parrafo-footer-naranja" style="display: inline-block;">Para cualquier duda, estamos para servirte.
                            </p>
                          </li>
                          <li>
                            <p class="parrafo-footer"  style="display: inline-block;"><img src="http://rmingredientes.com/assets/img/whatsapp-rmingredientes.png" alt="WhatsApp RM Ingredientes" width="30px"> 618 126 8438</p>
                          </li>
                          <li>
                            <p class="parrafo-footer"  style="display: inline-block;">rigo880821@gmail.com</p>
                          </li>

                        </ul>
                      </div>
                      <!-- </div> -->
                    </div>
                    <div class="footer-below">
                    </div>
                  </footer>        

                  <!-- /#wrapper -->


                  <!-- jQuery -->
                  <script src="{{ URL::asset('assets/vendor/jquery/jquery.min.js') }}"></script>

                  <!-- Bootstrap Core JavaScript -->
                  <script src="{{ URL::asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
                  <!-- Latest compiled and minified JavaScript -->
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

                  <!-- Custom Theme JavaScript -->
                  <script src="{{ URL::asset('assets/dist/js/sb-admin-2.js') }}"></script>

                  <script src="{{ URL::asset('assets/js/notiny-master/notiny-master/dist/notiny.js') }}"></script>


                </body>

                </html>


