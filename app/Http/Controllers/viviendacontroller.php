<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viviendacontroller extends Controller
{
    public function create (Request $request){

        $vivienda = new vivienda();

        $vivienda -> localidad = $request -> localidad
        $vivienda -> tipo = $request -> tipo
        $vivienda -> m2 = $request -> m2
        $vivienda -> num_hab = $request -> num_hab
        $vivienda -> num_banos = $request -> num_banos
        $vivienda -> piscina = $request -> piscina
        $vivienda -> garaje = $request -> garaje

        $vivienda -> save();
        return redirect('/');
    }

    public function read(){
        
        $vivienda = vivienda::all();
        return view('viviendas.index', ['viviendas' => $viviendas]);
    }

    public function edit($id){
        
        $viviendas = vivienda::all();
        $house = vivienda::findOrFail($id);
        return view('viviendas.index', ['viviendas' => $viviendas, 'house' => $house]);
    }

    public function  update (Request $request, $id){
        
        $vivienda = vivienda::findOrFail($id);

        $vivienda -> localidad = $request -> localidad
        $vivienda -> tipo = $request -> tipo
        $vivienda -> m2 = $request -> m2
        $vivienda -> num_hab = $request -> num_hab
        $vivienda -> num_banos = $request -> num_banos
        $vivienda -> piscina = $request -> piscina
        $vivienda -> garaje = $request -> garaje

        $vivienda -> save();
        return redirect('/');
    }

    public function preguntar($id){
        
        $vivienda = vivienda::all();
        $houseDelete = vivienda::findOrFail($id);

        return view('viviendas.index', ['viviendas' => $viviendas, 'houseDelete' => $houseDelete]);
    }

    public function delete($id){
        
        $vivienda = vivienda::findOrFail($id);
        $vivienda -> delete();

        return redirect('/');
    }
}
