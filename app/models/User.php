<?php
use Cartalyst\Sentry\Users\Eloquent\User as SentryUserModel;

class User extends SentryUserModel {

	/**
	 * Indicates if the model should soft delete.
	 *
	 * @var bool
	 */
	protected $softDelete = true;

	/**
	 * The date fields for the model.
	 *
	 * @var array
	 */
	protected $dates = array(
		'created_at',
		'updated_at',
		'deleted_at',
	);

	public function fullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function characters()
	{
		return $this->hasMany('Character');
	}
}
