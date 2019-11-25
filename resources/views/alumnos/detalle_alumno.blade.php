@extends('layouts.header')
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Detalle del Alumno</h2>
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-lg-3">
        <label for="nombre">Nombre(s):</label>
        <input type="text" value="{{ $alumno->nombre }}" readonly disabled>
    </div>
    <div class="form-group col-lg-3">
        <label for="ap_paterno">Apellido paterno:</label>
        <input type="text" value="{{ $alumno->ap_paterno }}" readonly disabled>
    </div>
    <div class="form-group col-lg-3">
        <label for="ap_materno">Apellido materno:</label>
        <input type="text" value="{{ $alumno->ap_materno }}" readonly disabled>

    </div>
    <div class="form-group col-lg-3">
        <label for="matricula">Matricula :</label>
        <input type="text" value="{{ $alumno->matricula }}" readonly disabled>
    </div>
</div>
<div class="row col-lg-6">
    <a  href="{{route('editar/alumno',$alumno->id)}}" class="btn-01">Editar</a>  <br>
    <a href="{{route('lista_alumnos')}}" class="btn-01">Regresar</a>
</div>

@endsection