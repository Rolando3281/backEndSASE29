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

    /**BOMBERO */
    $router->get('bomberos',  ['uses' => 'bomberosController@showAllBomberos']);
  
    $router->get('bomberos/{id}', ['uses' => 'bomberosController@showOneBombero']);
  
    $router->post('bomberos', ['uses' => 'bomberosController@create']);
  
    $router->delete('bomberos/{id}', ['uses' => 'bomberosController@delete']);
  
    $router->put('bomberos/{id}', ['uses' => 'bomberosController@update']);


    /*TIPOS UNIDADES */

    $router->get('tiposUnidades',  ['uses' => 'tiposUnidadesController@showAllTipos']);
  
    $router->get('tiposUnidades/{id}', ['uses' => 'tiposUnidadesController@showOneTipo']);
  
    $router->post('tiposUnidades', ['uses' => 'tiposUnidadesController@create']);
  
    $router->delete('tiposUnidades/{id}', ['uses' => 'tiposUnidadesController@delete']);
  
    $router->put('tiposUnidades/{id}', ['uses' => 'tiposUnidadesController@update']);

    /*Tipos Origen */

    $router->get('tipoOrigen',  ['uses' => 'tipoOrigenController@showAllTipos']);
  
    $router->get('tipoOrigen/{id}', ['uses' => 'tipoOrigenController@showOneTipo']);
  
    $router->post('tipoOrigen', ['uses' => 'tipoOrigenController@create']);
  
    $router->delete('tipoOrigen/{id}', ['uses' => 'tipoOrigenController@delete']);
  
    $router->put('tipoOrigen/{id}', ['uses' => 'tipoOrigenController@update']);

     /*ESTATUS */

     $router->get('estatus',  ['uses' => 'estatusController@showAllEstatus']);
  
     $router->get('estatus/{id}', ['uses' => 'estatusController@showOneEstatus']);
   
     $router->post('estatus', ['uses' => 'estatusController@create']);
   
     $router->delete('estatus/{id}', ['uses' => 'estatusController@delete']);
   
     $router->put('estatus/{id}', ['uses' => 'estatusController@update']);

     /* UNIDADES */

     $router->get('unidades',  ['uses' => 'unidadesController@showAllUnidades']);
  
     $router->get('unidades/{id}', ['uses' => 'unidadesController@showOneUnidades']);
   
     $router->post('unidades', ['uses' => 'unidadesController@create']);
   
     $router->delete('unidades/{id}', ['uses' => 'unidadesController@delete']);
   
     $router->put('unidades/{id}', ['uses' => 'unidadesController@update']);
  });