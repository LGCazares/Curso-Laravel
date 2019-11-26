@extends('layouts.header')
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Detalle del Profesor</h2>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label for="nombre">Nombre(s):</label>
            <input type="text" value="{{ $profe->nombre }}" readonly disabled>
        </div>
        <div class="form-group col-lg-3">
            <label for="ap_paterno">Apellido paterno:</label>
            <input type="text" value="{{ $profe->ap_paterno }}" readonly disabled>
        </div>
        <div class="form-group col-lg-3">
            <label for="ap_materno">Apellido materno:</label>
            <input type="text" value="{{ $profe->ap_materno }}" readonly disabled>

        </div>
        <div class="form-group col-lg-3">
            <label for="num_empleado">Núm. Empleado :</label>
            <input type="text" value="{{ $profe->num_empleado }}" readonly disabled>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-end mt-3 ">
            <a href="{{route('editar/profesor', $profe->id )}}" class="btn-01 col-lg-2 ">Editar</a> <br>
            <a href="{{route('lista_profesores')}}" class="btn-01 col-lg-2 ml-2">Regresar</a>
        </div>
    </div>
</div>

@endsection