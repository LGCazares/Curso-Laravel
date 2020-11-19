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
<h3 class="">Lista de Profesores</h3>


<table class="table table-striped">

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
            <td>--</td>
            <td>{{ $profesor->nombre }}</td>
            <td>{{ $profesor->ap_paterno }}</td>
            <td>{{ $profesor->ap_materno }}</td>
            <td>{{ $profesor->num_empleado }}</td>
            <td><a href="{{route('detalle/profesor', $profesor->id)}}"><img class="detalle" src="images/ojo.png" alt=""></a></td>
            <td><a href="{{route('elimina/profesor', $profesor->id)}}" class="btn-x"><img class="detalle" src="images/equis.png" alt=""></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection