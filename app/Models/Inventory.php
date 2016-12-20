<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'mine_id', 'user_id',
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get inventory item user (owner)
     * 
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    /**
     * Get inventory item object
     * 
     */
    public function mine()
    {
        return $this->belongsTo('App\Models\Mine');
    }
}
