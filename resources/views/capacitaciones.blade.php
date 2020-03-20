

@extends('frontLayout.app')
@section('title')

Capacitaciones

@stop
@section('content')


<style>

a{
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
        
        <th><button type="button" class="btn btn-primary" ><a href="{{URL::action('capacitacion@iniciarcapa',['id'=>$lis->id])}}"><i class="fa fa-play" aria-hidden="true"> Iniciar</i></a></button></th>

        <th><button type="button" class="btn btn-danger" ><a href="{{URL::action('capacitacion@desactivarcapa',['id'=>$lis->id])}}"><i class="fa fa-times" aria-hidden="true"> Finalizar</i></a></button></th>
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection


