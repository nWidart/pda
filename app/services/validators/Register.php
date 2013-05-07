<?php namespace Services\Validators;

class Register extends Validator {
    public static $rules = [
        'email' => 'required|email',
        'password' => 'required|confirmed',
        'password_confirmation' => 'required'
    ];
}
