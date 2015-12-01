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

Route::get('/ingredientes', 'IngredienteController@lista');

Route::get('/ingredientes/{id}', 'IngredienteController@detalle');

Route::get('/ingredientes/{id}/recetas', 'IngredienteController@recetas');

Route::post('/ingredientes', 'IngredienteController@nuevo');
