<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumno;
use App\Materia;


class alumnoController extends Controller

{
    //home
    public function home() {
        return view('home.inicio');
    }
    //////////////////////////////////////////

    public function mostrarFormulario () {
        $materias=Materia::all();
        return view('alumnos.formulario_alumno', compact('materias'));
    }

    public function guarda_formulario (Request $request) {     
        $validate = $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'matricula' => 'required|unique:alumnos|string|size:8',
          ]);
        $nuevo_alumno=Alumno::create($request->all());
        return redirect()->route('lista_alumnos')->with('status','Información guardada.');
    }

    public function mostrarAlumnos () {
        $alumnos=Alumno::all();
        return view ('alumnos.lista_alumnos', compact('alumnos'));
    }

    public function detalleAlumno ($id) {
        $alumno=Alumno::where('id', $id)->first();
        return view('alumnos.detalle_alumno', compact('alumno'));

    }
    public function editAlumno ($id) {
        $alumno=Alumno::where('id', $id)->first();
        return view('alumnos.edit_alumno', compact('alumno'));
    }

    public function updateAlumno (Request $request){
        $validate = $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
          ]);
        $alumno=Alumno::find($request->id);
          $alumno->update($request->all());
          return redirect()->route('lista_alumnos')->with('status','Información actualizada.');
    }


    public function deleteAlumno ($id) {
        Alumno::destroy($id);
        return redirect()->route('lista_alumnos')->with('status','Alumno borrado');
    }


}