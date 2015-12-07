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
Route::get('/ingredientes/test1', 'TestController@test1');

//prueba consulta BBDD con SQL elemento en vector
Route::get('/ingredientes/test2', 'TestController@test2');

//prueba consulta BBDD con SQL en lista
Route::get('/ingredientes/test3', 'TestController@test3');

//prueba consulta BBDD con SQL paso id de receta para que la muestre
Route::get('/ingredientes/test4/{id}', 'TestController@test4');

//prueba consulta BBDD con SQL paso nombre de receta para buscar el id
//paso el id para que busque los ingredientes asociados
//Muestra los ingredientes y las cantidades
//Route::get('/ingredientes/test5/{nombreRec}', 'IngredienteController@test5');

//prueba asignacin de valores a los atributos de una clase
//y mostrarlos en la vista
Route::get('/recetas/test5', 'TestController@test5');


//prueba consulta a base de datos y asignar valores obtenidos
//a los atributos del objeto y mostrarlos en la vista
Route::get('/recetas/test6/{id}', 'TestController@test6');

//prueba consulta a base de datos y asignar valores obtenidos
//a los atributos del objeto y mostrarlos en la vista
//pero esta vez como un listao
Route::get('/recetas/test7', 'TestController@test7');

//Muestra el objeto receta completo
//Con todos los atributos asignados
//Con todos los subojteos asignados
Route::get('/recetas/ver_receta/{id}', 'RecetaController@ver_receta');

Route::get('/recetas/lista_recetas', 'RecetaController@ver_lista_recetas');


//Muestra articulo concreto
//Route::get('/ingredientes/{id}', 'IngredienteController@detalle');

