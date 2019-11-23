@extends('layouts.header')
@section('content')

@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<style>
    .detalle {
        width: 1.5em;
        height: 1.5em;
    }
</style>
<h3 class="">Lista de Profesores</h3>


<table class="table table-striped">

    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">NOMBRE</th>
            <th scope="col">APELLIDO PATERNO</th>
            <th scope="col">APELLIDO MATERNO</th>
            <th scope="col"># EMPLEADO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profesores as $profesor)
        <tr>
            <td>-</td>
            <td>{{ $profesor->nombre }}</td>
            <td>{{ $profesor->ap_paterno }}</td>
            <td>{{ $profesor->ap_materno }}</td>
            <td>{{ $profesor->num_empleado }}</td>
            <td><a href=""><img class="detalle" src="images/ojo.png" alt=""></a></td>
            <td><a href="" class="btn-x" data-toggle="modal" data-target="#Eliminar"><img class="detalle" src="images/equis.png" alt=""></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<!-- Modal -->
<div class="modal fade" id="Eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Deceas borar esta materia?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div>
            <h5>No hay marcha atras y los datos se perderan</h5>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary">Borrar</button>
      </div>
    </div>
  </div>
</div>
@endsection