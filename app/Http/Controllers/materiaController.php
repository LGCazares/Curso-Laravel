<?php

namespace App\Http\Controllers;
use App\Profe;
use Illuminate\Http\Request;
use App\Materia;


class materiaController extends Controller
{
    public function mostrarFormulario () {
        $profes = Profe::all();
        return view('materias.formulario_materias')->with('profes',$profes);
    }

    public function guarda_formulario (Request $request) {
        $validate = $request->validate([
            'materia' => 'required',
            'creditos' => 'required',
            'clave' => 'required',
            'profe_id' => 'required',

          ]);

        $nueva_materia=Materia::create($request->all());
        return redirect()->route('nueva_materia')->with('status','Información guardada.');
    }
}
