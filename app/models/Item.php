<?php
class Item extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';
    public $timestamps = false;

    public function characters()
    {
        return $this->belongsToMany('character', 'character_items');
    }
    // public function modifiers()
    // {
    //     return $this->hasMany('Modifier');
    // }
    public function attributes()
    {
        return $this->hasMany('ItemAttribute');
    }
}
