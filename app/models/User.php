<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

	public function scopeUsuarios(){

		$usuarios = DB::table('users')

		->where('rol','=',3)
		->orWhere('rol','=',2)
		->orderBy('id','desc');

		return $usuarios;

		
	}
	public function scopeMasCompras(){

		$usuarios = DB::table('users as u')

		->select(DB::raw('COUNT(p.id), u.id, u.nombre, u.ap_paterno, u.ap_materno'))

		->join('pedidos as p',function($join){
						$join->on('p.id_user','=','u.id');
					})
		->groupBy('u.id')

		->orderBy(DB::raw('COUNT(p.id)'),'desc');

		return $usuarios;

		
	}


}
