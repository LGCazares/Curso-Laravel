@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<h3 class="">REGISTROS</h3>

<div class="ml-auto my-5 col-lg-3">
        <a href="{{route('nuevo_alumno')}}"  class="">Nuevo Alumno</a>
</div>
<div class="ml-auto my-5 col-lg-3">
        <a href="{{route('nuevo_profesor')}}"  class="">Nuevo Profesor</a>
</div>
<div class="ml-auto my-5 col-lg-3">
        <a href="{{route('nueva_materia')}}"  class="">Nueva Materia</a>
</div>
@endsection