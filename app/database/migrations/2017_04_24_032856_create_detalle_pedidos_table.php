<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallePedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detalle_pedidos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer("id_pedido");
			$table->integer("id_producto");
			$table->integer("cantidad");
			$table->integer("subtotal");
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
		Schema::drop('detalle_pedidos');
	}

}
