<?php
class ItemAttribute extends Eloquent {
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'itemAttributes';
    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo('Item');
    }

}
