<?php

namespace startcooking\Http\Controllers;

use startcooking\Models\Receta;
use startcooking\DAO\Receta_DAO;
use DB;
use startcooking\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class RecetaController extends Controller
{
 
    protected function ver_receta($id){
        //Llamamos al metodo read de receta para asignar un objeto
        //receta completamente definido a nuestra variable
        $objeto_receta = Receta_DAO::read($id);
        
        //Devolvemos a la vista un objeto receta con todos los atributos asignados
        return view('recetas')->with('receta_completa', $objeto_receta);
    }
    
    protected function ver_lista_recetas()
    {
       $lista_recetas = array();
       $consulta_receta = DB::select('select * from receta');
       foreach ($consulta_receta as $item_receta){
           $objeto_receta = Receta_DAO::read($item_receta ->id_receta);
           array_push($lista_recetas, $objeto_receta);
       }
       
        return view('lista_recetas')->with('receta_lista', $lista_recetas);
    }

    protected function detalle($id)
    {
        return view('ingredientes');
    }
    
}