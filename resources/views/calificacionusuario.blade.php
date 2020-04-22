

@extends('backLayout.app')
@section('title')

Calificaciones 

@stop
@section('content')


<style>

#activo{

    color: aliceblue;
    background-color: #25BD7C;
    padding: 5px;
    border-radius: 50px;
    
    
}

#Inactivo{

color: aliceblue;
background-color: #F6422C;
padding: 5px;
border-radius: 50px;


}
 

#indef{

color: aliceblue;
background-color: #FFC300;
padding: 5px;
border-radius: 50px;


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

<div class="panel panel-default">
    
  <div class="panel-heading">Listado de Calificaciones  </div>

  <br>


  <div class="panel-body">
 


<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#25BD7C">ID</font></th>
        <th scope="col"><font color="#25BD7C">Examen</font></th>
        <th scope="col"><font color="#25BD7C">Tipo</font></th>
        <th scope="col"><font color="#25BD7C">Usuario</font></th>
        <th scope="col"><font color="#25BD7C">Cal. Pre</font></th>
        <th scope="col"><font color="#25BD7C">Cal. Post</font></th>
        <th scope="col"><font color="#25BD7C">Promedio</font></th>
      </tr>
    </thead>
    <tbody>

        @foreach($con as $co)
      <tr>
        <th scope="row" >{{  $co->id }}</th>
        <th>{{ $co->title }}</th>
        <th>{{ $co->tipo }}</th>
        <th>{{ $co->user }}</th>
        <th>{{ $co->calpre }}</th>
        <th>{{ $co->calpos }}</th>
        <th>{{$co->promedio}}</th>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
</div>

@endsection



