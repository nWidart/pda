<?php namespace Services\Validators;

class Battlenet extends Validator {
    public static $rules = [
        'battletag' => 'required'
    ];
}
