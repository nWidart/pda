<?php namespace Services\Validators;

class Register extends Validator {
    public static $rules = [
        'email' => 'Required|email',
        'password' => 'Required|Confirmed',
        'password_confirmation' => 'Required'
    ];
}
