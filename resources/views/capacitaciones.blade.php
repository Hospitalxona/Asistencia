

@extends('backLayout.app')
@section('title')

Lista de Capacitaciones

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

#ini{
  color: aliceblue;
}

#fin{
  color: aliceblue;
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
    
  <div class="panel-heading">Listado de Capacitaciones  </div>


<div class="panel-body">

<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#900C3F  ">#</font></th>
        <th scope="col"><font color="#900C3F  ">Capacitación</font></th>
        <th scope="col"><font color="#900C3F  ">Fecha</font></th>
        <th scope="col"><font color="#900C3F  ">Hora</font></th>
        <th scope="col"><font color="#900C3F  ">Lugar</font></th>
        <th scope="col"><font color="#900C3F  ">Comenzar</font></th>
        <th scope="col"><font color="#900C3F  ">Finalizar</font></th>
        <th scope="col"><font color="#900C3F  ">Terminar</font></th>
        
      </tr>
    </thead>
    <tbody>
        @foreach($lista as $lis)
      <tr>
        <th scope="row" >{{$lis->id}}</th>
        <th>{{$lis->nombre}}</th>
        <th>{{$lis->fecha}}</th>
        <th>{{$lis->hora}}</th>
        <th>{{$lis->lugar}}</th>
        
        <th><a href="{{URL::action('capacitacion@iniciarcapa',['id'=>$lis->id])}}" id="ini" class="btn btn-primary btn-block"><i class="fa fa-play" aria-hidden="true"> </i></a></th>

        <th><a href="{{URL::action('capacitacion@salidacapa',['id'=>$lis->id])}}" id="fin" class="btn btn-warning btn-block"><i class="fa fa-pause" aria-hidden="true"> </i></a></th>


        <th><a href="{{URL::action('capacitacion@desactivarcapa',['id'=>$lis->id])}}" id="ter" class="btn btn-danger btn-block"><i class="fa fa-times" aria-hidden="true"> </i></a></th>
      </tr>
      @endforeach
    </tbody>
  </table>

</div>
</div>

@endsection


