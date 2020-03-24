

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
        @foreach($cal as $c)
      <tr>
        <th scope="row" >{{$c->id}}</th>
        <th>{{$c->title}}</th>
        <th>Tipo</th>
        <th>Usuario</th>
        <th>{{$c->calpre}}</th>
        <th>{{$c->calpos}}</th>
        <th>  Acciones  </th>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection


