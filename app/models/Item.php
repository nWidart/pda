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
        return $this->belongsToMany('Character', 'character_items', 'character_id', 'item_id');
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
