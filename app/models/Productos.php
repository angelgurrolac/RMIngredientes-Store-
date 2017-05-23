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
			'p.imagen','cat.nombre as nombreC','cat.id as idC','p.id_categoria2');

		return $productos;
	}
	public function scopemaiz(){
		$productos = DB::table('productos as p')

		->join('categorias as cat',function($join){
							$join->on('p.id_categoria','=','cat.id');
					})

		->select('p.id','p.descripcion_corta','p.presentacion','p.nombre','p.descripcion_completa','p.modo_empleo','p.beneficios','p.precio_unitario',
			'p.imagen','cat.nombre as nombreC','cat.id as idC')

		->where('p.id_categoria','=',1)
		->orWhere('p.id_categoria2','=',1);

		return $productos;
	}

		public function scopeharina(){
		$productos = DB::table('productos as p')

		->join('categorias as cat',function($join){
							$join->on('p.id_categoria','=','cat.id');
					})

		->select('p.id','p.descripcion_corta','p.presentacion','p.nombre','p.descripcion_completa','p.modo_empleo','p.beneficios','p.precio_unitario',
			'p.imagen','cat.nombre as nombreC','cat.id as idC')

		->where('p.id_categoria','=',2)
		->orWhere('p.id_categoria2','=',2);

		return $productos;
	}

		public function scopepanificadoras(){
		$productos = DB::table('productos as p')

		->join('categorias as cat',function($join){
							$join->on('p.id_categoria','=','cat.id');
					})

		->select('p.id','p.descripcion_corta','p.presentacion','p.nombre','p.descripcion_completa','p.modo_empleo','p.beneficios','p.precio_unitario',
			'p.imagen','cat.nombre as nombreC','cat.id as idC')

		->where('p.id_categoria','=',3)
		->orWhere('p.id_categoria2','=',3);

		return $productos;
	}

		public function scopeespecializado(){
		$productos = DB::table('productos as p')

		->join('categorias as cat',function($join){
							$join->on('p.id_categoria','=','cat.id');
					})

		->select('p.id','p.descripcion_corta','p.presentacion','p.nombre','p.descripcion_completa','p.modo_empleo','p.beneficios','p.precio_unitario',
			'p.imagen','cat.nombre as nombreC','cat.id as idC')

		->where('p.id_categoria','=',4)
		->orWhere('p.id_categoria2','=',4);

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