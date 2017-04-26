<?php

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    public function run()
    {
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
            'password'      =>  Hash::make('admin'),
            'rol'           =>  '2',
            'estatus'       =>  '1'
        ]);
    }

}