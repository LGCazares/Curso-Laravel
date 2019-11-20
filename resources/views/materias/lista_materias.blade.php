@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<h3 class="">Lista de Alumnos</h3>


<table class="table table-striped table-dark">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">MATERIA</th>
            <th scope="col">CREDITOS</th>
            <th scope="col">CLAVE</th>
            <th scope="col">PROFESOR</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($materias as $materia)
        <tr>
            <td>-</td>
            <td>{{ $materia->materia }}</td>
            <td>{{ $materia->creditos }}</td>
            <td>{{ $materia->clave }}</td>
            <td>{{ $materia->profe->nombre }} {{ $materia->profe->ap_paterno }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="ml-auto my-5 col-lg-3">
        <a href="{{route('nueva_materia')}}"  class="">Nuevo Alumno</a>
    </div>
@endsection