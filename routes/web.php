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

     /*TIPOS HERRAMIENTAS */
    $router->get('tiposHerramientas',  ['uses' => 'tiposHerramientasController@showAllTipos']);
  
    $router->get('tiposHerramientas/{id}', ['uses' => 'tiposHerramientasController@showOneTipo']);
  
    $router->post('tiposHerramientas', ['uses' => 'tiposHerramientasController@create']);
  
    $router->delete('tiposHerramientas/{id}', ['uses' => 'tiposHerramientasController@delete']);
  
    $router->put('tiposHerramientas/{id}', ['uses' => 'tiposHerramientasController@update']);

    /*TIPOS EQUIPOS */

    $router->get('tiposEquipos',  ['uses' => 'tiposEquiposController@showAllTipos']);
  
    $router->get('tiposEquipos/{id}', ['uses' => 'tiposEquiposController@showOneTipo']);
  
    $router->post('tiposEquipos', ['uses' => 'tiposEquiposController@create']);
  
    $router->delete('tiposEquipos/{id}', ['uses' => 'tiposEquiposController@delete']);
  
    $router->put('tiposEquipos/{id}', ['uses' => 'tiposEquiposController@update']);

    /**HERRAMIENTAS */

    $router->get('herramientas',  ['uses' => 'herramientasController@showAllHerramientas']);
  
    $router->get('herramientas/{id}', ['uses' => 'herramientasController@showOneHerramientas']);
  
    $router->post('herramientas', ['uses' => 'herramientasController@create']);
  
    $router->delete('herramientas/{id}', ['uses' => 'herramientasController@delete']);
  
    $router->put('herramientas/{id}', ['uses' => 'herramientasController@update']);

    /**TIPOS INSUMOS */
    $router->get('tiposInsumos',  ['uses' => 'tiposInsumosController@showAllTipos']);
  
    $router->get('tiposInsumos/{id}', ['uses' => 'tiposInsumosController@showOneTipo']);
  
    $router->post('tiposInsumos', ['uses' => 'tiposInsumosController@create']);
  
    $router->delete('tiposInsumos/{id}', ['uses' => 'tiposInsumosController@delete']);
  
    $router->put('tiposInsumos/{id}', ['uses' => 'tiposInsumosController@update']);

    /**PROPOSITO INSUMO */

    $router->get('propositosInsumos',  ['uses' => 'propositosInsumosController@showAllInsumos']);
  
    $router->get('propositosInsumos/{id}', ['uses' => 'propositosInsumosController@showOneInsumo']);
  
    $router->post('propositosInsumos', ['uses' => 'propositosInsumosController@create']);
  
    $router->delete('propositosInsumos/{id}', ['uses' => 'propositosInsumosController@delete']);
  
    $router->put('propositosInsumos/{id}', ['uses' => 'propositosInsumosController@update']);

    /** INSUMOS */

    $router->get('insumos',  ['uses' => 'insumosController@showAllInsumos']);
  
    $router->get('insumos/{id}', ['uses' => 'insumosController@showOneInsumo']);
  
    $router->post('insumos', ['uses' => 'insumosController@create']);
  
    $router->delete('insumos/{id}', ['uses' => 'insumosController@delete']);
  
    $router->put('insumos/{id}', ['uses' => 'insumosController@update']);

    /**TIPOS SERVICIOS */

    $router->get('tiposServicios',  ['uses' => 'tiposServiciosController@showAllTipos']);
  
    $router->get('tiposServicios/{id}', ['uses' => 'tiposServiciosController@showOneTipo']);
  
    $router->post('tiposServicios', ['uses' => 'tiposServiciosController@create']);
  
    $router->delete('tiposServicios/{id}', ['uses' => 'tiposServiciosController@delete']);
  
    $router->put('tiposServicios/{id}', ['uses' => 'tiposServiciosController@update']);

    /**TIPOS EMERGENCIAS */

    $router->get('tiposEmergencias',  ['uses' => 'tiposEmergenciasController@showAllTipos']);
  
    $router->get('tiposEmergencias/{id}', ['uses' => 'tiposEmergenciasController@showOneTipo']);
  
    $router->post('tiposEmergencias', ['uses' => 'tiposEmergenciasController@create']);
  
    $router->delete('tiposEmergencias/{id}', ['uses' => 'tiposEmergenciasController@delete']);
  
    $router->put('tiposEmergencias/{id}', ['uses' => 'tiposEmergenciasController@update']);

    /**SERVICIOS */

    $router->get('servicios',  ['uses' => 'serviciosController@showAllServicios']);
  
    $router->get('servicios/{id}', ['uses' => 'serviciosController@showOneServicio']);
  
    $router->post('servicios', ['uses' => 'serviciosController@create']);
  
    $router->delete('servicios/{id}', ['uses' => 'serviciosController@delete']);
  
    $router->put('servicios/{id}', ['uses' => 'serviciosController@update']);

    /**BOMBEROS SERVICIOS */

    $router->get('bomberosServicios',  ['uses' => 'bomberosServiciosController@showAllBomberosServicios']);
  
    $router->get('bomberosServicios/{id}', ['uses' => 'bomberosServiciosController@showOneBomberosServicios']);
  
    $router->post('bomberosServicios', ['uses' => 'bomberosServiciosController@create']);
  
    $router->delete('bomberosServicios/{id}', ['uses' => 'bomberosServiciosController@delete']);
  
    $router->put('bomberosServicios/{id}', ['uses' => 'bomberosServiciosController@update']);

    /**UNIDADES SERVICIOS */

    $router->get('unidadesServicios',  ['uses' => 'unidadesServiciosController@showAllUnidadesServicios']);
  
    $router->get('unidadesServicios/{id}', ['uses' => 'unidadesServiciosController@showOneUnidadesServicios']);
  
    $router->post('unidadesServicios', ['uses' => 'unidadesServiciosController@create']);
  
    $router->delete('unidadesServicios/{id}', ['uses' => 'unidadesServiciosController@delete']);
  
    $router->put('unidadesServicios/{id}', ['uses' => 'unidadesServiciosController@update']);

    /**LLAMADAS EMERGENCIAS */

    $router->get('llamadasEmergencias',  ['uses' => 'llamadasEmergenciasController@showAllLLamadasEmergencias']);
  
    $router->get('llamadasEmergencias/{id}', ['uses' => 'llamadasEmergenciasController@showOneLlamadasEmergencias']);
  
    $router->post('llamadasEmergencias', ['uses' => 'llamadasEmergenciasController@create']);
  
    $router->delete('llamadasEmergencias/{id}', ['uses' => 'llamadasEmergenciasController@delete']);
  
    $router->put('llamadasEmergencias/{id}', ['uses' => 'llamadasEmergenciasController@update']);

     /**BOMBEROS EMERGENCIAS */

     $router->get('bomberosEmergencias',  ['uses' => 'bomberosEmergenciasController@showAllBomberosEmergencias']);
  
     $router->get('bomberosEmergencias/{id}', ['uses' => 'bomberosEmergenciasController@showOneBomberosEmergencias']);
   
     $router->post('bomberosEmergencias', ['uses' => 'bomberosEmergenciasController@create']);
   
     $router->delete('bomberosEmergencias/{id}', ['uses' => 'bomberosEmergenciasController@delete']);
   
     $router->put('bomberosEmergencias/{id}', ['uses' => 'bomberosEmergenciasController@update']);

     /**UNIDADES EMERGENCIAS */

    $router->get('unidadesEmergencias',  ['uses' => 'unidadesEmergenciasController@showAllUnidadesEmergencias']);
  
    $router->get('unidadesEmergencias/{id}', ['uses' => 'unidadesEmergenciasController@showOneUnidadesEmergencias']);
  
    $router->post('unidadesEmergencias', ['uses' => 'unidadesEmergenciasController@create']);
  
    $router->delete('unidadesEmergencias/{id}', ['uses' => 'unidadesEmergenciasController@delete']);
  
    $router->put('unidadesEmergencias/{id}', ['uses' => 'unidadesEmergenciasController@update']);

 




  });