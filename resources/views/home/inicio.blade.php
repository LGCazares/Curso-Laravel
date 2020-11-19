@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<div class="container">
    <div>
        <h1 class="">Rutas</h1>
    </div>
    <div class="">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>DESCRIPCION</th>
                    <th>LINK</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2"> Datatables con serverSide</th>
                </tr>
                <tr>
                    <td>
                        Hay muchas formas de introducir sus datos en DataTables, y si está trabajando con
                        bases de datos muy grandes, es posible que desee considerar el uso de las opciones
                        del lado del servidor que proporciona DataTables. <br>
                        <a target="_blank" href="https://datatables.net/examples/data_sources/server_side">https://datatables.net/examples/data_sources/server_side</a>
                    </td>
                    <td><a href="{{route('lista_usuarios')}}">lista_usuarios</a></td>
                </tr>
                <tr>
                    <th colspan="2">Ejercicios de PHP </th>
                </tr>
                <tr>
                    <td>Index</td>
                    <td><a href="{{route('index_php')}}">index_php</a></td>
                </tr>
                <tr>
                    <td>Arreglos Indexados</td>
                    <td><a href="{{route('arreglos_indexados')}}">arreglos_indexados</a></td>
                </tr>
                <tr>
                    <td>Estructuras de control</td>
                    <td><a href="{{route('estructuras_control')}}">estructuras_control</a></td>
                </tr>
                <tr>
                    <td>Print_r - var_dump</td>
                    <td><a href="{{route('print_r_var_dump')}}">print_r_var_dump</a></td>

                </tr>
                <tr>
                    <td>Switch</td>
                    <td><a href="{{route('switch')}}">switch</a></td>

                </tr>
                <tr>
                    <th colspan="2">VUE.js</th>
                </tr>
                <tr>
                    <td>vue_lista</td>
                    <td><a href="{{route('vue_lista')}}">vue_lista</a></td>
                </tr>
                <tr>
                    <th colspan="2">Descarga WORD</th>
                </tr>
                <tr>
                    <td>Archivo Word</td>
                    <td><a href="{{route('descarga_word')}}">descarga_word</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection