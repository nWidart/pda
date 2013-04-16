<?php namespace Services\Validators;

class User extends Validator {
    public static $rules = [
        'firstName' => 'required',
        'lastName' => 'required',
        'battletag' => 'required',
    ];
}
