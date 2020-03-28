

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

  <form action="{{ route('exportbycriterio') }}" method="get" class="form-horizontal files">
    {{ csrf_field() }}
  

  <div class="col-sm-4">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
    <input type="search" class="form-control is-invalid" name="buscador" id="validationDefault03" placeholder="Buscar Examen" required>
    </div>
  </div>

  <div class="col-sm-2">

    <button type="submit" class="btn btn-link">
      <img src="{{ URL::asset('/images/excel.png') }}" alt="Generar Reporte en excel dependiendo el criterio dado por la busqueda" width="35" title="Export">
      <strong> <p>Reporte por examen</p> </strong> 
    </button>
    
  </div> 

  <div class="col-sm-2">

    <button type="button" class="btn btn-link">
      <a href="{{route('exportcalificacion')}}">
        <img src="{{ URL::asset('/images/exceln.png') }}" alt="Reporte" width="35" title="Reporte General">
        <strong> <p id="black">Reporte General</p> </strong> 
      </a>    
    </button>
    
  </div> 

</form>

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
        <th scope="col"><font color="#25BD7C">Pormedio</font></th>
        <th scope="col"><font color="#25BD7C">Acciones</font></th>
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
     
      <input type="number" style="text-align: center;" class="form-control" name="calpre"  value="{{ $co->calpre }}"  min="0" max="10">
      </center>
    </th>
    <th>
      <center>
      <input type="number"  style="text-align: center;" class="form-control"  name="calpos"  value="{{ $co->calpos }}"  min="0" max="10">
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



