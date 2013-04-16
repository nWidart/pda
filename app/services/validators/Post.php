<?php namespace Services\Validators;

class Post extends Validator {
    public static $rules = [
        'title' => 'required',
        'body' => 'required'
    ];
}
