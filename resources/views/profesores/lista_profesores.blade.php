@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<h3 class="">Lista de Profesores</h3>


<table class="table table-striped table-dark">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO PATERNO</th>
            <th scope="col">APELLIDO MATERNO</th>
            <th scope="col"># EMPLEADO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profesores as $profesor)
        <tr>
            <td>-</td>
            <td>{{ $profesor->nombre }}</td>
            <td>{{ $profesor->ap_paterno }}</td>
            <td>{{ $profesor->ap_materno }}</td>
            <td>{{ $profesor->num_empleado }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="ml-auto my-5 col-lg-3">
        <a href="{{route('nuevo_profesor')}}"  class="">Nuevo Profesor</a> <br>
        <a href="{{route('/')}}"  class="">REGISTRO</a>

    </div>
@endsection