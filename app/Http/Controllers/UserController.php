<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function index()
    {
    	$users = User::all();
    	return $users;
    }
}
