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

$router->get('/new-app-key', function() {
    return response()->json(['new_app_key' => \Illuminate\Support\Str::random(32)]);
});

$router->get('/', function () use ($router) {
    return $router->app->version();
});
