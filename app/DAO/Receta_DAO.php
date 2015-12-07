<?php
namespace startcooking\DAO;

use DB;
use startcooking\Models\RecetaTieneIngrediente;
use startcooking\Models\Ingrediente;
use startcooking\Models\Receta;
use \startcooking\DAO\Ingrediente_DAO;
use \startcooking\DAO\RecetaTieneIngrediente_DAO;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of RecetaDAO
 *
 * @author halporta
 */
class Receta_DAO {
    //put your code here
    static function read($id){
        $consulta_receta = DB::select('select * from receta where id_receta = ?',[$id]);
        $objeto_receta = new Receta();
        $objeto_receta->id_receta = $id;
        $objeto_receta->nombre_receta = $consulta_receta[0]->nombre_receta;
        $objeto_receta->preparacion = $consulta_receta[0]->preparacion;
        $objeto_receta->duracion = $consulta_receta[0]->duracion;
        $objeto_receta->recetaTieneIngrediente = RecetaTieneIngrediente_DAO::read($id);

        return $objeto_receta;
    }
}
