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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['middleware' => 'client.credentials'], function($router) {
    $router->get('/books', 'site1Controller@Books');

    $router->get('/books/{id}', 'site1Controller@showBook');

    $router->delete('/books/{id}', 'site1Controller@deleteBook');

    $router->post('/books', 'site1Controller@createBook');

    $router->put('/books/{id}', 'site1Controller@updateBook');

});