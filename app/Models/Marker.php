<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'item_id', 'lat', 'lng', 'is_active',
    ];

    /**
     * Get marker's item object
     * 
     */
    public function item()
    {
        return $this->belongsTo('App\Models\Inventory');
    }
}
