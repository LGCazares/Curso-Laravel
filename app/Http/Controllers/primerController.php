<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;


class primerController extends Controller

{
    public function inicio () {
    return view('01.formularios');
    }

    public function guarda () {
        return view('01.guarda_formulario');
        }

  

    public function guardaUsuario (Request $request) {                                           //Funcion que hace la accion
        $nuevo_usuario=Usuario::create($request->all());                              //$variable = Modelo
        return redirect()->route('guarda/usuario')->with('status','Usuario guardado con éxito.');             //Regresa a la Ruta //pone Status
        }
    

}


