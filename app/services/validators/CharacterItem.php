<?php namespace Services\Validators;

class CharacterItem extends Validator {
    public static $rules = [
        'item_id' => 'unique:character_items'
    ];
}
