<?php

class Productos extends Eloquent
{
	protected $table = "productos";

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