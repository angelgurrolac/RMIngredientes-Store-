<?php

use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create(
        [
            'nombre'        => 'Rigoberto',
            'ap_paterno'    => 'Medina',
            'ap_materno'    => 'Rodriguez',
            'direccion'     => 'C. de la Centella 211 Fracc. Los Remedios',
            'codigo_postal' =>  34100,
            'edad'          =>  28,
            'sexo'          => 'Masculino',
            'telefono'      => '6181268438',
            'correo'        => 'rmingredientes1989@hotmail.com',
            'password'      =>  Hash::make('Windowsxp1989@'),
            'rol'           =>  '2',
            'estatus'       =>  '1'
        ]
        );


    }

}