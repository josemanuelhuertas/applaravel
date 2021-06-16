<?php

namespace App\Http\Controllers;

use App\vivienda;
use Illuminate\Http\Request;

class viviendacontroller extends Controller
{

    public function index ()
    {
        //
        $datos['viviendas']=vivienda::all();
        //return view('viviendas.index',$datos );
        return view('viviendas.index' ,$datos);
    }


    public function create ()
    {
        //
        return view('viviendas.create');
   }

   public function store(Request $request)
   {
       //
        //$datosvivienda = request()->all();
       //$datosvivienda = request()->except('_token')

       //if($request->hasFile('foto')) {
           //$datosvivienda['foto']=$request->file('foto')->store('uploads', 'public');

       //}
        //vivienda::insert($datosvivienda);

        
       //return response()->json($datosvivienda);
        
       $vivienda = new vivienda;
       $vivienda->localidad=$request->input('localidad');
       $vivienda->tipo=$request->input('tipo');
       $vivienda->m2=$request->input('m2');
       $vivienda->num_hab=$request->input('num_hab');
       $vivienda->num_banos=$request->input('num_banos');
       $vivienda->piscina=$request->input('piscina');
       $vivienda->garaje=$request->input('garaje');
       $vivienda->save();
       return view('viviendas.create');

       /*
       $vivienda = new vivienda();

       $vivienda -> localidad = $request -> localidad
       $vivienda -> tipo = $request -> tipo
       $vivienda -> m2 = $request -> m2
       $vivienda -> num_hab = $request -> num_hab
       $vivienda -> num_banos = $request -> num_banos
       $vivienda -> piscina = $request -> piscina
       $vivienda -> garaje = $request -> garaje
    
       $vivienda -> save();
       return redirect('/viviendas/create');
        */
    }

}
