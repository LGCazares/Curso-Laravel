<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profe;


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
            'num_empleado' => 'required|unique:profes',
          ]);
         
        $nuevo_profesor=Profe::create($request->all());
        return redirect()->route('nuevo_profesor')->with('status','Información guardada.');
    }

}
