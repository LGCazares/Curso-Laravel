<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Alumno;
use App\Materia;
use App\AlumnoMateria;




class alumnoController extends Controller

{
    //home
    public function home()
    {
        return view('home.inicio');
    }
    //////////////////////////////////////////

    public function mostrarFormulario()
    {
        $materias = Materia::all();
        return view('alumnos.formulario_alumno', compact('materias'));
    }

    public function guarda_formulario(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
            'matricula' => 'required|unique:alumnos|string|size:8',
        ]);
        $nuevo_alumno = Alumno::create($request->all());
        $request->merge(['alumno_id' => $nuevo_alumno->id]);

        $materias = $request->materia_id;
        $alumnoMateria = array();
        if (null !== $materias && !empty($materias)) {
            foreach ($materias as $key => $value) {
                $alumnoMateria[] = array(
                    'alumno_id' => $nuevo_alumno->id,
                    'materia_id' => $value,
                    'created_at' => now(),
                    'updated_at' => now()
                );
            }
            AlumnoMateria::insert($alumnoMateria);
            return redirect()->route('lista_alumnos')->with('status', 'Información guardada.');
        }
    }

    public function mostrarAlumnos()
    {
        $alumnos = Alumno::all();
        $alumnoMateria = AlumnoMateria::all();
        return view('alumnos.lista_alumnos', compact('alumnos','alumnoMateria'));
    }

    public function detalleAlumno($id)
    {
        $alumno = Alumno::where('id', $id)->first();
        return view('alumnos.detalle_alumno', compact('alumno'));
    }
    public function editAlumno($id)
    {
        $alumno = Alumno::where('id', $id)->first();
        return view('alumnos.edit_alumno', compact('alumno'));
    }

    public function updateAlumno(Request $request)
    {
        $validate = $request->validate([
            'nombre' => 'required',
            'ap_paterno' => 'required',
            'ap_materno' => 'required',
        ]);
        $alumno = Alumno::find($request->id);
        $alumno->update($request->all());
        return redirect()->route('lista_alumnos')->with('status', 'Información actualizada.');
    }


    public function deleteAlumno($id)
    {
        Alumno::destroy($id);
        return redirect()->route('lista_alumnos')->with('status', 'Alumno borrado');
    }
}
