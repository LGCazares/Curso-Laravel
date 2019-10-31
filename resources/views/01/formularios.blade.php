@extends('layouts.header')
@section('content')






<h3 class="">Manda este formulario!</h3>
<form method="POST" class="" action="{{route('guarda/usuario')}}">
@csrf
    <input name="nombre" type="text" placeholder="Nombre" value="{{old('nombre')}}" required>
    {!! $errors->first('nombre','<span class="">:message</span>') !!}     

    <input name="ap_paterno" type="text" placeholder="Apellido Paterno" value="{{old('ap_paterno')}}" required>
    {!! $errors->first('ap_paterno','<span class="">:message</span>') !!}     

    <input name="ap_materno" type="text" placeholder="Apellido Materno"  value="{{old('ap_materno')}}" required>
    {!! $errors->first('ap_materno','<span class="">:message</span>') !!}     

    <input name="edad" type="number" placeholder="Edad"  value="{{old('edad')}}" required>
    {!! $errors->first('edad','<span class="">:message</span>') !!}     

    <input name="correo" type="email" placeholder="correo"  value="{{old('correo')}}" required>
    {!! $errors->first('correo','<span class="">:message</span>') !!}     

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<div>
</div>

@endsection