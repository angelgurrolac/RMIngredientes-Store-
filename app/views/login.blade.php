<!doctype html>
<html  lang="en" class="no-js"> 
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 

  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/jquery-ui.min.css') }}">
    <title>RM Ingredientes -Admin-</title>
</head>
<body>
    <div class="container">
        {{ Form::open(['url' => 'login']) }}

            @if(Session::has('error_message'))
                {{ Session::get('error_message') }}
            @endif

            <h2>Inicio de Sesión</h2>

            {{ Form::label('email', 'Correo Electrónico:') }}
            {{ Form::email('correo','',array('id'=>'','class'=>'form-control span6','placeholder' => 'Ingrese su usuario')) }}
            <br>
            {{ Form::label('password', 'Contraseña:') }}
            {{ Form::password('password',array('class'=>'form-control span6', 'placeholder' => 'Ingrese su contraseña')) }}
            <br>
            <label>
                {{ Form::checkbox('remember', true) }} Recordarme
            </label>
            <br>
            {{ Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) }}
    
        {{ Form::close() }}
    </div>
      <!-- jQuery -->
  <script src="{{ URL::asset('assets/js/jquery.js') }}"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
</body>
</html>