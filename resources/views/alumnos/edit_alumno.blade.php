@extends('layouts.header')
@section('content')

<style>
    .error_form {
        font-size: 0.625rem;
        color: red;
    }
</style>

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Editar Alumno</h2>
        </div>
    </div>
    <form method="POST" class="row">
        @csrf @method('PATCH')
        <div class="form-group col-lg-4">
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" placeholder="Nombre" value="{{old('nombre',$alumno->nombre)}}" name="nombre">
            {!! $errors->first('nombre','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="ap_paterno">Apellido paterno:</label>
            <input class="form-control" type="text" placeholder="Apellido paterno" value="{{old('ap_paterno',$alumno->ap_paterno)}}" name="ap_paterno">
            {!! $errors->first('ap_paterno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="ap_materno">Apellido materno:</label>
            <input class="form-control" type="text" placeholder="Apellido materno" value="{{old('ap_materno',$alumno->ap_materno)}}" name="ap_materno">
            {!! $errors->first('ap_materno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="matricula">Matricula :</label>
            <input class="form-control" type="number" placeholder="2000360101" value="{{old('matricula',$alumno->matricula)}}" name="matricula" {{ $alumno->ap_materno }}>
            {!! $errors->first('matricula','<span class="error_form">:message</span>') !!}
        </div>
</div>
<div class="d-flex justify-content-end">
    <button type="submit" class="btn-01 col-lg-4">Actualizar</button>
</div>
</form>
<div>
</div>
</div>

@endsection