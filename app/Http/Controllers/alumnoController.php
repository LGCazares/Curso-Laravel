<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Alumno;


class alumnoController extends Controller

{
    //home
    public function home() {
        return view('home.inicio');
    }
    //////////////////////////////////////////

    public function mostrarFormulario () {
        return view('alumnos.formulario_alumno');
    }

    public function guarda_formulario (Request $request) {     
        $validate = $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'matricula' => 'required|unique:alumnos',
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

}


