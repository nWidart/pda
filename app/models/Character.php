<?php
class Character extends Eloquent
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'characters';

    public function user()
    {
        return $this->belongsTo('User');
    }
    public function items()
    {
        return $this->belongsToMany('Item', 'character_items', 'character_id', 'item_id');
    }
    /**
     * Deletes a character and all the associated Items.
     *
     * @return bool
     */
    public function delete()
    {
        // $this->items()->delete();
        // foreach($this->items as $item)
        // {
        //     $item->delete();
        // }

        // Delete the character
        return parent::delete();
    }
}
