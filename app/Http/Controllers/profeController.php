<?php

namespace App\Http\Controllers;
use App\Profe;


use Illuminate\Http\Request;

class profeController extends Controller
{
    public function mostrarFormulario () {
        return view('profesores.formulario_profesores');
    }
    public function guarda_formulario (Request $request) {     
        $validate = $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'num_empleado' => 'required|unique:profes|string|size:8',

          ]);
         
        $nuevo_profesor=profe::create($request->all());
        return redirect()->route('nuevo_profesor')->with('status','Información guardada.');
    }
}
