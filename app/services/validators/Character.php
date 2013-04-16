<?php namespace Services\Validators;

class Character extends Validator {
    public static $rules = [
        'character' => 'unique:characters,hero_id'
    ];
}
