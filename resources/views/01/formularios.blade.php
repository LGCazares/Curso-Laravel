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
            <h2 class="fs-22 fw-bold pine-green">Cuenta de usuario</h2>
        </div>
    </div>
    <form method="POST" class="row" action="{{route('guarda_formulario')}}">
        @csrf
        <div class="form-group col-lg-4">
            <label for="nombre">Nombre:</label>
            <input type="text" placeholder="Nombre" value="{{ old('nombre') }}" name="nombre">
            {!! $errors->first('nombre','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="ap_paterno">Primer apellido:</label>
            <input type="text" placeholder="Primer apellido" value="{{ old('ap_paterno') }}" name="ap_paterno">
            {!! $errors->first('ap_paterno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="ap_materno">Primer materno:</label>
            <input type="text" placeholder="Primer materno" value="{{ old('ap_materno') }}" name="ap_materno">
            {!! $errors->first('ap_materno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="edad">Edad :</label>
            <input type="number" placeholder="Edad " value="{{ old('edad') }}" name="edad">
            {!! $errors->first('edad','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="correo">Correo:</label>
            <input type="email" placeholder="Correo" value="{{ old('correo') }}" name="correo">
            {!! $errors->first('correo','<span class="error_form">:message</span>') !!}
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    <div>
    </div>
</div>

@endsection