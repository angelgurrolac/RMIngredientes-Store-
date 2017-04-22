<?php

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'nombre'        => 'Angel',
            'ap_paterno'    => 'Gurrola',
            'ap_materno'    => 'Candia',
            'direccion'     => 'Martires de Chicago 106 Asentamientos Humanos',
            'codigo_postal' =>  34180,
            'edad'          =>  23,
            'sexo'          => 'masculino',
            'telefono'      => '618 806 4903',
            'correo'        => 'angel_gurrolac@outlook.com',
            'password'      =>  Hash::make('admin'),
            'rol'           =>  'admin',
            'estatus'       =>  '1'
        ]);
    }

}