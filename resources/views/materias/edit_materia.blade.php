@extends('layouts.header')
@section('content')

<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 text-center">
            <h2 class="fs-22 fw-bold pine-green">Editar materia</h2>
        </div>
    </div>
    <form method="POST" class="row">
        @csrf @method('PATCH')
        <div class="form-group col-lg-3">
            <label for="materia">Materia:</label>
            <input class="form-control" type="text" value="{{old('materia',$materia->materia)}}" name="materia">
            {!! $errors->first('materia','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-2">
            <label for="creditos">Creditos:</label>
            <input class="form-control" type="text" value="{{old('creditos',$materia->creditos)}}" name="creditos">
            {!! $errors->first('creditos','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-3">
            <label for="clave">Clave:</label>
            <input class="form-control" type="text" value="{{old('clave',$materia->clave)}}" name="clave">
            {!! $errors->first('clave','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-4">
            <label for="profe_id">Profesor:</label>
            <select class="form-control" name="profe_id">
                @foreach ($profes as $profe)
                         <option value="{{ $profe->id }}" {{ old("id", $materia->profe->id) == $profe->id ? "selected":"" }}>{{$profe->nombre }} {{$profe->ap_paterno }} {{$profe->ap_materno }}</option>
                @endforeach
            </select>
            {!! $errors->first('profe_id','<span class="error_form">:message</span>') !!}
        </div>
</div>
<div class="d-flex justify-content-end">
    <button type="submit" class="btn-01 col-lg-4">Actualizar</button>
</div>
</form>
<div>
</div>

@endsection