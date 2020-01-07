<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profe;
use App\Materia;


class materiaController extends Controller
{
    public function mostrarFormulario () {
        $profes = Profe::all();
        return view('materias.formulario_materias', compact('profes'));
    }

    public function guarda_formulario (Request $request) {
        $validate = $request->validate([
            'materia' => 'required',
            'creditos' => 'required|string|size:2',
            'clave' => 'required|string|size:4',
            'profe_id' => 'required',
          ]);
        $nueva_materia=Materia::create($request->all());
        return redirect()->route('lista_materias')->with('status','Información guardada.');
    }
    public function mostrarMaterias () {
        $materias=Materia::all();
        return view ('materias.lista_materias', compact('materias'));
    }

    public function detalleMateria ($id){
        $materia=Materia::where('id',$id)->first();
        return view('materias.detalle_materia', compact('materia'));
    }

    public function editMateria ($id){
        $materia=Materia::where('id',$id)->first();
        $profes = Profe::all();
        return view('materias.edit_materia', compact('materia','profes'));
    }

     public function deleteMateria($id){
        $materia=Materia::find($id);
        $materia->delete();
        return redirect()->route('lista_materias')->with('status','Materia borrada');
    }
}
