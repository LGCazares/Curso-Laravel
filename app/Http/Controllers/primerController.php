<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Modelos\Usuario;


class primerController extends Controller

{
    public function inicio () {
    return view('01.formularios');
    }

    public function muestra_vista () {
        return view('01.guarda_formulario');
    }

    public function guarda(){
    $datos=Usuario::create(request()->all());
    return view('01.guarda_formulario', compact('datos'));
    }

}


