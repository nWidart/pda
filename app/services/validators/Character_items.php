<?php namespace Services\Validators;

class CharacterItems extends Validator {
    public static $rules = [
        'item_id' => 'unique:character_items'
    ];
}
