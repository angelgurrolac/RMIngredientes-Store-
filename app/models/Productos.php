<?php

class Productos extends Eloquent
{
	protected $table = "productos";


	public function scopeProductos(){
		$productos = DB::table('productos as p')

		->join('categorias as cat',function($join){
							$join->on('p.id_categoria','=','cat.id');
					})

		->select('p.id','p.descripcion_corta','p.presentacion','p.nombre','p.descripcion_completa','p.modo_empleo','p.beneficios','p.precio_unitario',
			'p.imagen','cat.nombre as nombreC','cat.id as idC');

		return $productos;
	}
	public function scopemaiz($categoria){
		$productos = DB::table('productos as p')

		->join('categorias as cat',function($join){
							$join->on('p.id_categoria','=','cat.id');
					})

		->select('p.id','p.descripcion_corta','p.presentacion','p.nombre','p.descripcion_completa','p.modo_empleo','p.beneficios','p.precio_unitario',
			'p.imagen','cat.nombre as nombreC','cat.id as idC')

		->where('p.id_categoria','=',$categoria);

		return $productos;
	}

	public function scopeMasVendido(){

		 $productos = DB::table('productos')

		 ->select('*')
		 ->orderBy('contador','desc');

		 return $productos;

	}

	public function scopeMenosVendido(){

		 $productos = DB::table('productos')

		 ->select('*')
		 ->orderBy('contador','asc');

		 return $productos;

	}

}