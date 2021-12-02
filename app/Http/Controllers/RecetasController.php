<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $recetas=['Receta Pizza','Receta Hamburguesa','Receta Tacos'];
        $categorias=['Comida Mexicana','Comida Alemana','Postres'];
        /* return view('recetas.index')->with('recetas',$recetas)->with('categorias',$categorias); */
        return view('recetas.index',compact('recetas','categorias'));
    }

}