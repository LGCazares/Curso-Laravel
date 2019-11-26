@extends('layouts.header')
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Detalle de la Materia</h2>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-lg-3">
            <label for="materia">Materia:</label>
            <input type="text" value="{{ $materia->materia }}" readonly disabled>
        </div>
        <div class="form-group col-lg-3">
            <label for="creditos">Creditos:</label>
            <input type="text" value="{{ $materia->creditos }}" readonly disabled>
        </div>
        <div class="form-group col-lg-3">
            <label for="clave">Clave:</label> <br>
            <input type="text" value="{{ $materia->clave }}" readonly disabled>
        </div>
        <div class="form-group col-lg-3">
            <label for="profe_id">Profesor:</label>
            <input type="text" value="{{ $materia->profe->nombre.' '.$materia->profe->ap_paterno.' '.$materia->profe->ap_materno }}" readonly disabled>
        </div>
    </div>
    <div>
        <div class="d-flex justify-content-end mt-3 ">
            <a href="{{route('editar/materia',$materia->id)}}" class="btn-01 col-lg-2 ">Editar</a> <br>
            <a href="{{route('lista_materias')}}" class="btn-01 col-lg-2 ml-2">Regresar</a>
        </div>
    </div>
</div>

@endsection