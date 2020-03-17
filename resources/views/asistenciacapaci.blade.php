

@extends('frontLayout.app')
@section('title')

Lista de Asistencias

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
</style>


<script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>




<script type="">

$(document).ready(function() {
    $('#example').DataTable();
} );
  
</script> 




<form action="{{ route('export') }}" method="get" class="form-horizontal files">
  {{ csrf_field() }}

<div class="form-group">

  <div class="col-sm-3">

    <input type="search" class="form-control" name="buscador" id="buscador" placeholder="Buscar Capacitación">

  </div>

  <div class="col">
{{-- 
      <button type="submit" class="btn btn-info" id="search">
        <i class="fa fa-search" aria-hidden="true"></i> Buscar</button> --}}


        {{-- <label for="" class="col-md-4 control-label"> Exportar </label> --}}

        <button type="submit" class="btn btn-link">
          <img src="{{ URL::asset('/images/excel.png') }}" alt="Generar Reporte en excel dependiendo el criterio dado por la busqueda" width="35" title="Export">
          <strong> <p>Exportar</p> </strong> 
        </button>

        {{-- <a href="{{route('export')}}"><img src="{{ URL::asset('/images/excel.png') }}" alt="" width="50" id="excel"></a> --}}


      {{-- <button type="submit" class="btn btn-danger">
        <a href="{{route('asistencia')}}">
          <i class="fa fa-undo" aria-hidden="true"></i> Regresar</a></li></button>
   --}}
  </div>         


</div>  

</form>



<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#2325E8">#</font></th>
        <th scope="col"><font color="#2325E8">User</font></th>
        <th scope="col"><font color="#2325E8">Fecha</font></th>
        <th scope="col"><font color="#2325E8">Hora</font></th>
        <th scope="col"><font color="#2325E8">Capacitación</font></th>
        {{-- <th scope="col"><font color="#2325E8">Comenzar</font></th>
        <th scope="col"><font color="#2325E8">Finalizar</font></th> --}}
        
      </tr>
    </thead>
    <tbody>
        @foreach($asis as $asi)
      <tr>
        <th scope="row" >{{$asi->ida}}</th>
        <th>{{$asi->user}}</th>
        <th>{{$asi->fecha}}</th>
        <th>{{$asi->hora}}</th>
        <th>{{$asi->nombre}}</th>
        
        {{-- <th><button type="button" class="btn btn-primary" ><a href="{{URL::action('capacitacion@iniciarcapa',['id'=>$lis->id])}}"><i class="fa fa-play" aria-hidden="true"> Iniciar</i></a></button></th>

        <th><button type="button" class="btn btn-danger" ><a href="{{URL::action('capacitacion@desactivarcapa',['id'=>$lis->id])}}"><i class="fa fa-times" aria-hidden="true"> Finalizar</i></a></button></th> --}}
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection


