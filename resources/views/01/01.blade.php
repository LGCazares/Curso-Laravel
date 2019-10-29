@extends('layouts.header')
@section('content')
<h3 class="">Como Mandar formularios?</h3>

<form class="" action="">
@csrf
    <input name="name" type="text" placeholder="Nombre">
    <input name="ap_paterno" type="text" placeholder="Apellido Paterno">
    <input name="ap_materno" type="text" placeholder="Apellido Materno">
    <input name="edad" type="number" placeholder="Edad">
    <input name="correo" type="email" placeholder="correo">

    <button type="button" class="btn btn-primary">Enviar</button>

</form>


@endsection