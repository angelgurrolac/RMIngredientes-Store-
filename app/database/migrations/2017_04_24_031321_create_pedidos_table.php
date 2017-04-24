<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("id_user");
			$table->string("domicilio");
			$table->string("caracteristica");
			$table->integer("subtotal");
			$table->integer("iva");
			$table->integer("total");
			$table->enum('estatus', array('pendiente', 'confirmada','declinada'));
			$table->string("tipo_pago");
			$table->time("hora");
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
		Schema::drop('pedidos');
	}

}
