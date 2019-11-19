<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profe;


class profeController extends Controller
{
 public function mostrarFormulario () {
        return view('profesores.formulario_profesores');
    }
}
