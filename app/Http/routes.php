<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//ruta muestra lista ingredientes luis
Route::get('/ingredientes', 'IngredienteController@lista');

//prueba paso de variable
Route::get('/ingredientes/test1', 'IngredienteController@test1');

//prueba consulta BBDD con SQL elemento en vector
Route::get('/ingredientes/test2', 'IngredienteController@test2');

//prueba consulta BBDD con SQL en lista
Route::get('/ingredientes/test3', 'IngredienteController@test3');

//prueba consulta BBDD con SQL paso id de receta para que la muestre
Route::get('/ingredientes/test4/{id}', 'IngredienteController@test4');

//prueba consulta BBDD con SQL paso nombre de receta para buscar el id
//paso el id para que busque los ingredientes asociados
//Muestra los ingredientes y las cantidades
Route::get('/ingredientes/test5/{nombreRec}', 'IngredienteController@test5');


Route::get('/ingredientes/testvector', 'IngredienteController@testvector');



//Muestra articulo concreto
//Route::get('/ingredientes/{id}', 'IngredienteController@detalle');

