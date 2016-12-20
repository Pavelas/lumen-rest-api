<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = ['item_id', 'lat', 'lng', 'is_active'];

    /**
     * The attributes that are hidden
     * 
     */
    protected $hidden = ['item_id', 'is_active', 'item'];

    /**
     * The attributes that are appends
     * 
     */
    protected $appends = ['user', 'mine'];

    /**
     * Get the user who planted the mine
     * 
     */
    public function getUserAttribute()
    {
        return $this->item->user->username;
    }

    /**
     * Get the mine information
     * 
     */
    public function getMineAttribute()
    {
        return $this->item->mine;
    }

    /**
     * Get marker's item object
     * 
     */
    public function item()
    {
        return $this->belongsTo('App\Models\Inventory');
    }
}
