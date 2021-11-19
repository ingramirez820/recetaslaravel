<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecetasController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {   
        $recetas=['Receta Pizza','Receta Hot dog','Receta Hamburguesa'];
        $categorias=['Comida Mexicana','Comida Argentina','Postres'];
        //return view('recetas.index')->with('recetas',$recetas);
        /*<Con este código enviamos lao valores a la vista */
        /* return view('recetas.index')
                                ->with('recetas',$recetas)
                                ->with('categorias',$categorias); */
        /**Con este código tenemos otra forma de enviar los valores a la vista */
        return view('recetas.index',compact('recetas','categorias'));
    }
}
