<?php

namespace startcooking\Http\Controllers;

use startcooking\Models\Ingrediente;
use DB;
use startcooking\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class IngredienteController extends Controller
{

    protected function lista()
    {
        $resultado = Ingrediente::all();
        return dd($resultado);
        return view('ingredientes')->with('ingredientes', $resultado);
    }

    
    protected function test1()
    {
        $receta_test = 'loquetuquieras';
        return view('ingredientes')->with('receta_vista', $receta_test);
    }
    
    protected function test2()
    {
        $resultado_consulta = DB::select('select nombre_ing from ing where id_ing = ?',[2]);
        return view('ingredientes')->with('nombre_test', $resultado_consulta);
    }
    
    protected function test3()
    {
        $resultado_consulta = DB::select('select * from receta');
        return view('ingredientes')->with('receta_test', $resultado_consulta);
    }
    
    protected function test4($id)
    {
        $resultado_consulta = DB::select('select * from receta where id_receta = ?',[$id]);
        return view('ingredientes')->with('receta_test', $resultado_consulta);
    }
    
    protected function test5($nombreRec)
    {
      //consulta 1 sacar el id de la receta con el nombre seleccionado
        $resultado_consulta1 = DB::select('select * from receta where nombre_receta = ?',[$nombreRec]);
        $idRec = ($resultado_consulta1[0]->id_receta);
        //if si no hay resultados (empty) no se ha encontrado busqueda
        
     //consulta 2 sacar los id de ingredientes que aparecen en la receta seleccionada  
        $resultado_consulta2 = DB::select('select * from receta_tiene_ing where receta_id_receta = ?',[$idRec]);
      
        $resultado_consulta3= array();
        foreach ($resultado_consulta2 as $ing_incluido){
            $idIngIncl = ($ing_incluido->ing_id_ing);
            //consulta 3 sacar los nombre de los ingredientes devueltos   
            $resultado_consulta3[] = DB::select('select * from ing where id_ing = ?',[$idIngIncl]);    
        }
     

           
        return view('ingredientes')->with('ing_receta_test', $resultado_consulta3);
    }
    
    protected function testvector(){
        
    }
    
    
    
    protected function detalle($id)
    {
        return view('ingredientes');
    }
    
    
    
    
    
    protected function recetas($id)
    {
        return "Recetas que podemos cocinar con el ingrediente $id";
    }
    
    protected function nuevo(Request $request)
    {
        $ingrediente = Ingrediente::create();
        $ingrediente->nombre_ing = $request->get("nombre");
        $ingrediente->save();
        
        return view('ingredientes')->with('ingredientes', $resultado);
    }
    
    
}
