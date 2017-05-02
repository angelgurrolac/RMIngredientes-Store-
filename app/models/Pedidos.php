<?php

class Pedidos extends Eloquent
{
	protected $table = "pedidos";


	public function scopeVentas(){

		$pedidos = DB::table('pedidos')

		->join('users as users',function($join){
							$join->on('users.id','=','pedidos.id_user');
					}) 
		->join('detalle_pedidos as detalle',function($join){
							$join->on('detalle.id_pedido','=','pedidos.id');
					})
		->join('productos as productos',function($join){
							$join->on('detalle.id_producto','=','productos.id');
					})  

		->select(DB::raw('pedidos.id as id, users.nombre, users.ap_paterno , users.ap_materno, 
			 GROUP_CONCAT(productos.nombre) as pnombre , pedidos.total'))

		->where('pedidos.created_at' , 'BETWEEN' ,  
			DB::raw('DATE_FORMAT(CURRENT_DATE - INTERVAL 1 MONTH, "%Y-%m-01") AND 
			LAST_DAY(CURRENT_DATE - INTERVAL 1 MONTH) ')
			)
		->orderBy('users.id','desc')
		->groupBy('users.id');

		return $pedidos;

	}

	public function scopeTipoPago(){
		$pedidos = DB::table('pedidos as p')

		->select(DB::raw('ROUND((((SELECT COUNT(*) FROM pedidos WHERE tipo_pago="visa")*100)/count(*)),2) AS visa,
			ROUND((((SELECT COUNT(*) FROM pedidos WHERE tipo_pago="mastercard")*100)/count(*)),2) AS mastercard,
			ROUND((((SELECT COUNT(*) FROM pedidos WHERE tipo_pago="oxxo")*100)/count(*)),2) AS oxxo'));

		return $pedidos;
	}


}