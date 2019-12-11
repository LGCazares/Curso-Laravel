@extends('layouts.header')
@section('content')

<script>

alert('Hola');                       //una alerta al cargar la paguina

var nombre;                          // declarar una vareable      

nombre = prompt("Ingresa tu nombre");       //prompt -- te pide un valor y lo guarda en una vareable
document.write(nombre);

</script>

<div class="container">
    
</div>

@endsection