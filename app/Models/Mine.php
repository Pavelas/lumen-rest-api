<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mine extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = ['name', 'description'];

    /**
     * The attributes excluded from the model's JSON form.
     * 
     */
    protected $hidden = ['id'];

    /**
     * Indicates if the model should be timestamped.
     *
     */
    public $timestamps = false;
}
