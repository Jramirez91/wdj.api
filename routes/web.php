<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

function resource($uri, $controller, $router)
{
    //$verbs = ['GET', 'HEAD', 'POST', 'PUT', 'PATCH', 'DELETE'];
    $router->get($uri, $controller.'@index');
    $router->post($uri, $controller.'@store');
    $router->get($uri.'/{id}', $controller.'@show');
    $router->put($uri.'/{id}', $controller.'@update');
    $router->patch($uri.'/{id}', $controller.'@update');
    $router->delete($uri.'/{id}', $controller.'@destroy');
}


resource('api/inbox', 'InboxController', $router);
$router->get('/', function () use ($router) {
    
    return $router->app->version();
});
