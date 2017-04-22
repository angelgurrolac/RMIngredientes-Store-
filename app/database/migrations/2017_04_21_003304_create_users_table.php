<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('ap_paterno');
			$table->string('ap_materno');
			$table->string('direccion');
			$table->integer('codigo_postal');
			$table->integer('edad');
			$table->string('sexo');
			$table->string('telefono');
			$table->string('correo');
			$table->string('password');
			$table->string('rol');
			$table->string('estatus');
			$table->rememberToken();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
