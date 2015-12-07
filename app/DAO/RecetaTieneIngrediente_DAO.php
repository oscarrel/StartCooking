<?php
namespace startcooking\DAO;

use DB;
use startcooking\Models\RecetaTieneIngrediente;
use startcooking\Models\Ingrediente;
use \startcooking\DAO\Ingrediente_DAO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RecetaTieneIngredienteDAO
 *
 * @author halporta
 */


class RecetaTieneIngrediente_DAO {
    //put your code here
    static function read($id){
        
        //Creamos el array que devolveremos
        $array_recetaTieneIngrediente = array();
        //Consulta para obtener las cantidades de ingredientes
        //con el id de la receta
        $consulta_receta_tiene_ing = DB::select('select * from receta_tiene_ing where receta_id_receta = ?',[$id]);

        //Iteramos la consulta para extraer cada linea
        //con cada linea crearemos un objeto "RecetaTieneIngredientes"
        //y asignaremos valores a sus atributos Incluido el objeto Ingrediente
        //Al que llamamos con nuestro otro metodo para rellenar el objeto ingrediente
        
        //Despues rellenamos nuestro array con esos objetos RecetatieneIngredientes
        //Con los valores de sus atributos ya asignados
        // Y devolvemos el array
        foreach($consulta_receta_tiene_ing as $cant){
            $objeto_RecetatieneIngredientes = new RecetaTieneIngrediente();
            $objeto_RecetatieneIngredientes->receta_id_receta = $id;
            $objeto_RecetatieneIngredientes->cantidad = $cant->cantidad;
            $objeto_RecetatieneIngredientes->ing_id_ing = $cant->ing_id_ing;

            $objeto_RecetatieneIngredientes->ingrediente = Ingrediente_DAO::read($cant->ing_id_ing);
            
            array_push($array_recetaTieneIngrediente, $objeto_RecetatieneIngredientes);
        }

        return $array_recetaTieneIngrediente;
    }
}
