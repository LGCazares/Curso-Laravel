@extends('layouts.header')
@section('content')






<h3 class="">Como Mandar formularios?</h3>
<form method="POST" class="" action="{{route('guarda')}}">
@csrf
    <input name="name" type="text" placeholder="Nombre" required>
    <input name="ap_paterno" type="text" placeholder="Apellido Paterno" required>
    <input name="ap_materno" type="text" placeholder="Apellido Materno" required>
    <input name="edad" type="number" placeholder="Edad" required>
    <input name="correo" type="email" placeholder="correo" required>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
<div>
</div>

@endsection