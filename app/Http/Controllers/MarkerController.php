<?php

namespace App\Http\Controllers;

use App\Models\Marker;

class MarkerController extends Controller
{
    /**
     * Get all mines
     * 
     */
    public function getAll()
    {
    	$markers = Marker::where('is_active', 1)->get();

    	return $markers;
    }
}
