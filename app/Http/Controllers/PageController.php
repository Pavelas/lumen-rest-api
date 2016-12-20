<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    /**
     * Index page
     * 
     */
    public function index()
    {
    	return view('index');
    }
}
