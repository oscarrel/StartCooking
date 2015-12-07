<?php

namespace startcooking\Http\Controllers;

use startcooking\Models\Receta;
use startcooking\DAO\Receta_DAO;
use DB;
use startcooking\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class TestController extends Controller
{

    protected function lista()
    {
        $resultado = Ingrediente_eloquent::all();
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
    
    
    protected function test5(){
        $resultado_consulta = new Receta();
        $resultado_consulta->id_receta = 100;
        $resultado_consulta->nombre_receta = 'Pochas';
        $resultado_consulta->preparacion = 'Abrir bote, calentar contenido, comer';
        $resultado_consulta->duracion = 15;
        
        return view('recetas')->with('receta_test', $resultado_consulta);
    }
    
    protected function test6($id){
        
        $resultado_consulta = DB::select('select * from receta where id_receta = ?',[$id]);

        $objeto_receta = new Receta();
        
        $objeto_receta->nombre_receta = $resultado_consulta[0]->nombre_receta;

        return view('recetas')->with('receta_test', $objeto_receta);
    }
    
    
    protected function test7(){
        
        $resultado_consulta = DB::select('select * from receta');

        
        $lista_recetas = array();
        
  
        foreach($resultado_consulta as $rec){
            $objeto_receta = new Receta();
            $objeto_receta->nombre_receta = $rec->nombre_receta;
            array_push($lista_recetas, $objeto_receta);
        }

        return view('recetas')->with('receta_test', $lista_recetas);
    }
    
    protected function test8($id){
        
        //Llamamos al metodo read de receta para asignar un objeto
        //receta completamente definido a nuestra variable
        $objeto_receta = Receta_DAO::read($id);
        
        //Devolvemos a la vista un objeto receta con todos los atributos asignados
        return view('recetas')->with('receta_test', $objeto_receta);
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
        $ingrediente = Ingrediente_eloquent::create();
        $ingrediente->nombre_ing = $request->get("nombre");
        $ingrediente->save();
        
        return view('ingredientes')->with('ingredientes', $resultado);
    } 
}