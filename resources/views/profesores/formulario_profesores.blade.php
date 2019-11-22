@extends('layouts.header')
@section('content')

<style>
    .error_form {
        font-size: 0.625rem;
        color: red;
    }
</style>
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Registro de Profesores</h2>
        </div>
    </div>
    <form method="post" class="row" action="{{route('guarda_formulario_profe')}}">
        @csrf
        <div class="form-group col-lg-3">
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" placeholder="Nombre" value="{{ old('nombre') }}" name="nombre">
            {!! $errors->first('nombre','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-3">
            <label for="ap_paterno">Apellido paterno:</label>
            <input class="form-control" type="text" placeholder="Apellido paterno" value="{{ old('ap_paterno') }}" name="ap_paterno">
            {!! $errors->first('ap_paterno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-3">
            <label for="ap_materno">Apellido materno:</label>
            <input class="form-control" type="text" placeholder="Apellido materno" value="{{ old('ap_materno') }}" name="ap_materno">
            {!! $errors->first('ap_materno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-3">
            <label for="num_empleado">num_empleado :</label>
            <input class="form-control" type="number" placeholder="12345678" value="{{ old('num_empleado') }}" name="num_empleado">
            {!! $errors->first('num_empleado','<span class="error_form">:message</span>') !!}
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
    </form>
    <div>
    </div>
</div>

@endsection