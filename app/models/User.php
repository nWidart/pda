<?php

class User extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	public function fullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function characters()
	{
		return $this->hasMany('Character');
	}
}
