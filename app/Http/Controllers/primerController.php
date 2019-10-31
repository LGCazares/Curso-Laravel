<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Usuario;


class primerController extends Controller

{
    
    public function mostrarFormulario () {
        return view('01.formularios');
    }

    public function guarda_formulario (Request $request) {                                           //Funcion que hace la accion
        $nuevo_usuario=Usuario::create($request->all());
        return redirect()->route('lista_usuarios')->with('status','Información guardada.');
    }

    public function mostrarUsuarios () {
        $usuarios=Usuario::all();
        return view ('01.lista', compact('usuarios'));
    }

}


