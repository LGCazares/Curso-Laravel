@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<style>
.detalle {
    width: 1.5em;
    height: 1.5em;
}
</style>
<h3 class="">Lista de Materias</h3>

<table class="table table-striped">

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
            <td><a href="{{route('detalle/materia', $materia->id)}}"><img class="detalle" src="images/ojo.png" alt=""></a></td>
            <td><a href="{{route('elimina/materia', $materia->id)}}" class="btn-x"><img class="detalle" src="images/equis.png" alt=""></a></td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection