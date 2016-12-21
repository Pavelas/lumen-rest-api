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
        $user = app('Dingo\Api\Auth\Auth')->user();

        return $user;
    }
}
