<?php namespace Controllers\Admin;

use AdminController;
use Cartalyst\Sentry\Users\LoginRequiredException;
use Cartalyst\Sentry\Users\PasswordRequiredException;
use Cartalyst\Sentry\Users\UserExistsException;
use Cartalyst\Sentry\Users\UserNotFoundException;
use Config;
use Input;
use Lang;
use Redirect;
use Sentry;
use User;
use Validator;
use View;

class UsersController extends AdminController {
    /**
     * Declare the rules for the form validation
     *
     * @var array
     */
    protected $validationRules = array(
        'first_name'       => 'required|min:3',
        'last_name'        => 'required|min:3',
        'email'            => 'required|email|unique:users,email',
        'password'         => 'required|between:3,32',
        'password_confirm' => 'required|between:3,32|same:password',
    );

    /**
     * Show a list of all the users.
     *
     * @return View
     */
    public function getIndex()
    {
        // Grab all the users
        $users = User::paginate(10);

        // Do we want to include the deleted users?
        // if (Input::get('withTrashed'))
        // {
        //     $users = $users->withTrashed();
        // }

        // Show the page
        return View::make('backend/users/index', compact('users'));
    }
}
