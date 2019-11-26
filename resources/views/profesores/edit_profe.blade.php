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
            <h2 class="fs-22 fw-bold pine-green">Registro de Profesores</h2>
        </div>
    </div>
    <form method="post" class="row">
        @csrf @method('PATCH')
        <div class="form-group col-lg-3">
            <label for="nombre">Nombre:</label>
            <input class="form-control" type="text" placeholder="Nombre" value="{{ old('nombre', $profe->nombre) }}" name="nombre">
            {!! $errors->first('nombre','<span class="error_form">:message <br></span>') !!}
        </div>
        <div class="form-group col-lg-3">
            <label for="ap_paterno">Apellido paterno:</label>
            <input class="form-control" type="text" placeholder="Apellido paterno" value="{{ old('ap_paterno', $profe->ap_paterno) }}" name="ap_paterno">
            {!! $errors->first('ap_paterno','<span class="error_form">:message</span>') !!}
        </div>
        <div class="form-group col-lg-3">
            <label for="ap_materno">Apellido materno:</label>
            <input class="form-control" type="text" placeholder="Apellido materno" value="{{ old('ap_materno',$profe->ap_materno) }}" name="ap_materno">
            {!! $errors->first('ap_materno','<span class="error_form">:message</span>') !!}
        </div>
</div>
<div class="d-flex justify-content-end">
<button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar</button>
</div>
</form>
</div>
</div>

@endsection