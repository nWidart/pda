<?php
class Modifier extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'modifiers';
    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo('Item');
    }

}
