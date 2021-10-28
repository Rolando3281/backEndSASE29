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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('bomberos',  ['uses' => 'bomberosController@showAllBomberos']);
  
    $router->get('bomberos/{id}', ['uses' => 'bomberosController@showOneBombero']);
  
    $router->post('bomberos', ['uses' => 'bomberosController@create']);
  
    $router->delete('bomberos/{id}', ['uses' => 'bomberosController@delete']);
  
    $router->put('bomberos/{id}', ['uses' => 'bomberosController@update']);
  });