<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;

class IngredienteController extends Controller
{

    protected function lista()
    {
        $resultado = Ingrediente::all();
        return dd($resultado);
        return view('ingredientes')->with('ingredientes', $resultado);
    }

    protected function detalle($id)
    {
        return "Detalle del ingrediente $id";
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
