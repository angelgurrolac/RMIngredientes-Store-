<!doctype html>
<html  lang="en" class="no-js"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/freelancer.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui.min.css') }}">
    <title>RM Ingredientes -Admin-</title>
    <style>
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: #EA881E !important;
  font-size: 22px;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
::-moz-placeholder { /* Firefox 19+ */
  color: #EA881E !important;
  font-size: 22px;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
:-ms-input-placeholder { /* IE 10+ */
  color: #EA881E !important;
  font-size: 22px;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
:-moz-placeholder { /* Firefox 18- */
  color: #EA881E !important;
  font-size: 22px;
  font-family: Tahoma, Verdana, Segoe, sans-serif;
}
      
    </style>
</head>
<body class="back-conocenos">
    <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
      {{ Form::open(['url' => 'login']) }}

            @if(Session::has('error_message'))
                {{ Session::get('error_message') }}
            @endif

            <img class="img-responsive center-block logo-portada" src="assets/img/logo-portada-rmingredientes.png" alt="Logo RM Ingredientes">
            <br>

        
            {{ Form::email('correo','',array('id'=>'','class'=>'without-radius form-control text-center','placeholder' => 'USUARIO')) }}
            <br>
            {{ Form::password('password',array('class'=>'without-radius form-control  text-center', 'placeholder' => 'CONTRASEÑA')) }}
            <br>
            <label class="type-font">
                {{ Form::checkbox('remember', true )  }} Recordarme
            </label>
            <br>
            {{ Form::submit('INGRESAR', ['class' => 'btn btn-primary pull-right btn-verde']) }}
    
        {{ Form::close() }}
        
      </div>
      <div class="col-md-4"></div>
    </div>
        
    </div>
      <div class="row row-white"></div>
    <div class="row color-degradado"> </div>
      <!-- jQuery -->
  <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>