@extends('layouts.header')
@section('content')
<style>
    .detalle {
        width: 1.5em;
        height: 1.5em;
    }
</style>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif

<h3 class="">Lista de Alumnos</h3>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO PATERNO</th>
            <th scope="col">APELLIDO MATERNO</th>
            <th scope="col">MATRICULA</th>
            <th scope="col">MATERIAS</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->ap_paterno }}</td>
            <td>{{ $alumno->ap_materno }}</td>
            <td>{{ $alumno->matricula }}</td>
            <td>
                <ul>
                    @foreach ($alumno->materia as $materia)
                    <li>
                        {{ $materia->materia}}
                    </li>
                    @endforeach
                </ul>
            </td>
            <td><a href="{{route('detalle/alumno', $alumno->id)}}"><img class="detalle" src="images/ojo.png" alt=""></a></td>
            <td><a href="{{route('elimina/alumno', $alumno->id)}}" class="btn-x"><img class="detalle" src="images/equis.png" alt=""></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>

</p>

@endsection