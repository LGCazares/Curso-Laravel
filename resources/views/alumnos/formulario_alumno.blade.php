@extends('layouts.header')
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Registro de Alumno</h2>
        </div>
    </div>
    <form method="POST" class="form row" action="{{route('guarda_formulario')}}">
        @csrf
        <div class="form-group col-lg-4">
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" placeholder="Nombre" value="{{ old('nombre') }}" name="nombre">
            {!! $errors->first('nombre','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="ap_paterno">Apellido paterno:</label>
            <input class="form-control" type="text" placeholder="Apellido paterno" value="{{ old('ap_paterno') }}" name="ap_paterno">
            {!! $errors->first('ap_paterno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="ap_materno">Apellido materno:</label>
            <input class="form-control" type="text" placeholder="Apellido materno" value="{{ old('ap_materno') }}" name="ap_materno">
            {!! $errors->first('ap_materno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="matricula">Matricula :</label>
            <input class="form-control" type="number" placeholder="2000360101" value="{{ old('matricula') }}" name="matricula">
            {!! $errors->first('matricula','<span class="error_form">:message</span>') !!}
        </div>
</div>
<div class="container row justify-content-center">
    <div class="form-group col-lg-5 inputGroup">
        <h2 class="text-center">Materias</h2>
        @foreach ($materias as $materia)
        <ul>
            <input type="checkbox" id="materia_{{$materia->id}}">
            <label for="materia_{{$materia->id}}">{{$materia->materia }}</label>
        </ul>
        @endforeach
    </div>
</div>
<div>
    <button type="submit" class="btn btn-primary btn-lg btn-block mb-5">Enviar</button>
</div>
</form>
</div>

@endsection