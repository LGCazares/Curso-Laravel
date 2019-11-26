@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Registro de Materias</h2>
        </div>
    </div>
    <form method="POST" class="row" action="{{route('guarda_formulario_materia')}}">
        @csrf
        <div class="form-group col-lg-3">
            <label for="materia">Materia:</label>
            <input class="form-control" type="text" placeholder="Matematicas" value="{{ old('materia') }}" name="materia">
            {!! $errors->first('materia','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-3">
            <label for="creditos">Creditos:</label>
            <input class="form-control" type="number" placeholder="00" value="{{ old('creditos') }}" name="creditos">
            {!! $errors->first('creditos','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-2">
            <label for="clave">Clave:</label>
            <input class="form-control" type="number" placeholder="0000" value="{{ old('clave') }}" name="clave">
            {!! $errors->first('clave','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-5">
            <label for="profe_id">Profesor:</label>
            <select class="form-control" name="profe_id">
                <option value="">Profesor</option>
                @foreach ($profes as $profe)
                <option value="{{ $profe->id }}">{{$profe->nombre }} {{$profe->ap_paterno }} {{$profe->ap_materno }}</option>
                @endforeach
            </select>
            {!! $errors->first('profe_id','<span class="error_form">:message</span>') !!}
        </div>
        <button type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
    </form>
    <div>
    </div>
</div>

@endsection
