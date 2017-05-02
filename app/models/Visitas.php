<?php

class Visitas extends Eloquent
{
	protected $table = "visitas";

	public function scopeVisitasTotal(){

		$visitas = DB::table('visitas')

		->select(DB::raw('count(*) as num'));

		return $visitas;

	}

}