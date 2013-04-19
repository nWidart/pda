<?php namespace Services\Validators;

class Item extends Validator {
    public static $rules = [
        'name' => 'unique:items'
    ];
}
