<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$api = app('Dingo\Api\Routing\Router');

// JWT Protected routes
$api->version('v1', ['namespace' => 'App\Http\Controllers', 'middleware' => 'api.auth'], function ($api) {
    // $api->get('/index', 'UserController@index');
});

// Publicly accessible routes
$api->version('v1', ['namespace' => 'App\Http\Controllers'], function ($api) {
    $api->get('/', 'PageController@index');

    $api->get('/markers', 'MarkerController@getAll');
    $api->post('/login', 'AuthController@login');
});
