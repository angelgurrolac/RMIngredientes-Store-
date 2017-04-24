<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string("nombre");
			$table->longText("detalles");
			$table->string("imagen");
			$table->string("presentacion");
			$table->longText("modo_empleo");
			$table->longText("beneficios");
			$table->integer("precio_unitario");
			$table->integer("id_categoria");
			$table->tinyInteger("estado");
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
		Schema::drop('productos');
	}

}
