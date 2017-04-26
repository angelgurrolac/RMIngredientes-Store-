<?php

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    public function run()
    {
<<<<<<< HEAD
        User::create([
            'nombre'        => 'Angel2',
            'ap_paterno'    => 'Gurrola2',
            'ap_materno'    => 'Candia2',
            'direccion'     => 'Martires de Chicago 106 Asentamientos Humanos',
            'codigo_postal' =>  34180,
            'edad'          =>  23,
            'sexo'          => 'masculino',
            'telefono'      => '618 806 4903',
            'correo'        => 'angel@outlook.com',
=======
        User::create(
        [
            'nombre'        => 'Zayra',
            'ap_paterno'    => 'Chávez',
            'ap_materno'    => 'Bautista',
            'direccion'     => 'San Francisco 150 San José 1',
            'codigo_postal' =>  34204,
            'edad'          =>  22,
            'sexo'          => 'Femenino',
            'telefono'      => '618 110 6616',
            'correo'        => 'zayra@hotmail.com',
>>>>>>> master
            'password'      =>  Hash::make('admin'),
            'rol'           =>  '2',
            'estatus'       =>  '1'
        ]
        );


    }

}