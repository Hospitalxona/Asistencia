

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

  <div class="panel-body">
 


<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#900C3F">ID</font></th>
        <th scope="col"><font color="#900C3F">Examen</font></th>
        <th scope="col"><font color="#900C3F">Tipo</font></th>
        <th scope="col"><font color="#900C3F">Usuario</font></th>
        <th scope="col"><font color="#900C3F">Cal. Pre</font></th>
        <th scope="col"><font color="#900C3F">Cal. Post</font></th>
        <th scope="col"><font color="#900C3F">Pormedio</font></th>
        <th scope="col"><font color="#900C3F">Acciones</font></th>
      </tr>
    </thead>
    <tbody>

        @foreach($con as $co)
      <tr>
        <form action="{{Route('calificacion')}}" method="post" class="form-horizontal files">
          {{csrf_field()}}
        <th scope="row" >
          
          <input type="text" size="3" style="height:30px; text-align: center;" 
          name="id"  value="{{  $co->id }}" readonly>
        </th>
        <th>{{ $co->title }}</th>
        <th>{{ $co->tipo }}</th>
        <th>{{ $co->usuario }}</th>
    <th>
      <center>
     
      <input type="number" style="text-align: center;" name="calpre"  value="{{ $co->calpre }}"  min="1" max="10">
      </center>
    </th>
    <th>
      <center>
      <input type="number"  style="text-align: center;" name="calpos"  value="{{ $co->calpos }}"  min="1" max="10">
    </center>
    </th>

    <th style="text-align: center;">{{$co->promedio}} </th>

        <th>

          <button type="submit"  class="btn btn-success btn-sm btn-block"><strong>Guardar</strong></button>
                
        </th>
       
      </form>
      </tr>
      @endforeach

    </tbody>
  </table>

</div>
</div>

@endsection



