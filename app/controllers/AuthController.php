<?php

class AuthController extends BaseController {

    public function showLogin()
    {
        // Verificamos si hay sesión activa
        if (Auth::check())
        {
            // Si tenemos sesión activa mostrará la página de inicio
            return Redirect::to('/Admin/productos');
        }
        // Si no hay sesión activa mostramos el formulario
        return View::make('login');
    }

    public function postLogin()
    {
        // Obtenemos los datos del formulario
        $data = [
            'correo' => Input::get('correo'),
            'password' => Input::get('password')
        ];

        // Verificamos los datos
        if (Auth::attempt($data, Input::get('remember'))) // Como segundo parámetro pasámos el checkbox para sabes si queremos recordar la contraseña
        {
            // Si nuestros datos son correctos mostramos la página de inicio
            Session::put('nombre',User::find(Auth::user()->id)->nombre);
            return Redirect::intended('/login');
        }
        // Si los datos no son los correctos volvemos al login y mostramos un error
        return Redirect::back()->with('error_message', 'Credenciales Invalidas')->withInput();
    }

    public function logOut()
    {
        // Cerramos la sesión
        Auth::logout();
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
        return Redirect::to('login')->with('error_message', 'Nos vemos luego');
    }

}