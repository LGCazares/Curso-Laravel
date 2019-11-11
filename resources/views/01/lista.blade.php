@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<h3 class="">Lista de usuarios</h3>


<table class="table table-striped table-dark">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO PATERNO</th>
            <th scope="col">APELLIDO MATERNO</th>
            <th scope="col">EDAD</th>
            <th scope="col">CORREO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
            <td></td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->ap_paterno }}</td>
            <td>{{ $usuario->ap_materno }}</td>
            <td>{{ $usuario->edad }}</td>
            <td>{{ $usuario->correo }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="ml-auto my-5 col-lg-3">
        <a href="{{route('guarda_formulario')}}"  class="">Nuevo Usuario</a>
    </div>
@endsection