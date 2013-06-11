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

	/**
	 * Checks if the user has filled in all the required information
	 * to import characters from battle.net
	 * @return bool
	 */
	public static function importDataAvailable()
	{
		if ( isset( Sentry::getUser()->battletag ) && isset( Sentry::getUser()->server ) )
		{
		    return true;
		}
		else
		    return false;
	}

	/**
	 * Checks which characters are eligible to import
	 * @return array (empty string on error or none found)
	 * @TODO: return an actual error
	 */
	public static function getCharactersToImport()
	{
		if ( self::importDataAvailable() )
		{
		    $battletag = Sentry::getUser()->battletag;
		    $server = Sentry::getUser()->server;
		}
		else
		    return '';

		// Instantiate a new d3 instance
		$Diablo3 = new Diablo3( $battletag, $server, 'en_US' );

		// Get the info about that battle tag
		$career = $Diablo3->getCareer();
		$heroes = [];

		if ( !isset($career['heroes']) ) return '';

		$n = 0;
		foreach ( $career['heroes'] as $key )
		{
		    // Make a array for the validator
		    $input = [ 'character' => $key['id'] ];
		    // Check if character already is in database
		    $validator = new Services\Validators\Character($input);
		    if ( $validator->passes() )
		    {
		        $heroes[$n]['name'] = $key['name'];
		        $heroes[$n]['id'] = $key['id'];
		        $heroes[$n]['class'] = $key['class'];
		        $heroes[$n]['gender'] = $key['gender'];
		        $n++;
		    }
		}
		return $heroes;
	}
}
