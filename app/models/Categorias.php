<?php

class Categorias extends Eloquent
{
	protected $table = "categorias";

	public function scopeMas()
	{
		$categorias = DB::table('categorias as c')

		->orderBy('c.contador','desc');

		return $categorias;
	}

}