<?php

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    public function run()
    {
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
            'password'      =>  Hash::make('admin'),
            'rol'           =>  'admin',
            'estatus'       =>  '1'
        ]
        );


    }

}