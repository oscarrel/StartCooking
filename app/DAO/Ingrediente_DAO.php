<?php

namespace startcooking\DAO;

use DB;
use startcooking\Models\Ingrediente;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IngredienteDAO
 *
 * @author halporta
 */
class Ingrediente_DAO {
    
    static function read($id){
        //Hacemos nuestra consulta para sacar los valores de los atributos
        //del objeto ingrediente a partir del id del ingrediente
        $consulta_ingrediente = DB::select('select * from ing where id_ing = ?',[$id]);
        $objeto_ingrediente = new Ingrediente();
        $objeto_ingrediente->id_ing = $consulta_ingrediente[0]->id_ing;
        $objeto_ingrediente->nombre_ing = $consulta_ingrediente[0]->nombre_ing;
        $objeto_ingrediente->descripcion_ing = $consulta_ingrediente[0]->descripcion_ing;
        $objeto_ingrediente->calorias = $consulta_ingrediente[0]->calorias;

        //Devolvemos el objeto ingrediente
        return $objeto_ingrediente;
    }
}
