<?php

namespace App\Http\Controllers;

use App\Models\Mine;

class MineController extends Controller
{
    /**
     * Get all mines
     * 
     */
    public function index()
    {
    	$mines = Mine::all();
    	return $mines;
    }
}
