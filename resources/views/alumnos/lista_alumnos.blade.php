@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<h3 class="">Lista de Akumnos</h3>


<table class="table table-striped table-dark">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO PATERNO</th>
            <th scope="col">APELLIDO MATERNO</th>
            <th scope="col">MATRICULA</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($alumnos as $alumno)
        <tr>
            <td></td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->ap_paterno }}</td>
            <td>{{ $alumno->ap_materno }}</td>
            <td>{{ $alumno->matricula }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="ml-auto my-5 col-lg-3">
        <a href="{{route('nuevo_alumno')}}"  class="">Nuevo Alumno</a>
    </div>
@endsection