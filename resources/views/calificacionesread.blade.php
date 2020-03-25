

@extends('frontLayout.app')
@section('title')

Lista de Calificaciones

@stop
@section('content')


<style>

a{
color: aliceblue;
}

p{
  color:limegreen;
  font-style: italic;
  
}

#black{
  color: black;
}
</style>


<script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>




<script type="">

$(document).ready(function() {
    $('#example').DataTable();
} );
  
</script> 

<h1>  Listado de Calificaciones  </h1>

<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#900C3F">ID</font></th>
        <th scope="col"><font color="#900C3F">Examen</font></th>
        <th scope="col"><font color="#900C3F">Tipo</font></th>
        <th scope="col"><font color="#900C3F">Usuario</font></th>
        <th scope="col"><font color="#900C3F">Cal. Pre</font></th>
        <th scope="col"><font color="#900C3F">Cal. Post</font></th>
        <th scope="col"><font color="#900C3F">Acciones</font></th>
      </tr>
    </thead>
    <tbody>

        @foreach($con as $co)
      <tr>
        <th scope="row" >{{ $co->id }}</th>
        <th>{{ $co->title }}</th>
        <th>{{ $co->tipo }}</th>
        <th>{{ $co->usuario }}</th>
        <th>{{ $co->calpre }}</th>
        <th>{{ $co->calpos }}</th>
        <th>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Editar
            </button>
        </th>
      </tr>
      @endforeach

    </tbody>
  </table>

<!-- Modal Calificaciones-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Calificaciones</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>

@endsection


