

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




<form action="{{ route('export') }}" method="get" class="form-horizontal files">
  {{ csrf_field() }}

<div class="form-group">

  <div class="col-sm-4">
    <div class="input-group">
    <span class="input-group-addon"><i class="fa fa-search" aria-hidden="true"></i></span>
    <input type="search" class="form-control is-invalid" name="buscador" id="validationDefault03" placeholder="Buscar Capacitación" required>
    </div>
    

  </div>

  <div class="col-sm-2">


        <button type="submit" class="btn btn-link">
          <img src="{{ URL::asset('/images/excel.png') }}" alt="Generar Reporte en excel dependiendo el criterio dado por la busqueda" width="35" title="Export">
          <strong> <p>Exportar</p> </strong> 
        </button>

  </div>

  <div class="col-sm-2">

    <button type="button" class="btn btn-link">
      <a href="{{route('exportcomplete')}}">
        <img src="{{ URL::asset('/images/exceln.png') }}" alt="Reporte" width="35" title="Reporte General">
        <strong> <p id="black">Reporte General</p> </strong> 
      </a>    
    </button>
    
  </div>  

</div>  


</form>



<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#900C3F">#</font></th>
        <th scope="col"><font color="#900C3F">Usuario</font></th>
        <th scope="col"><font color="#900C3F">Función</font></th>
        <th scope="col"><font color="#900C3F">Correo</font></th>
        <th scope="col"><font color="#900C3F">Fecha de Registro</font></th>
        <th scope="col"><font color="#900C3F">Hora de Ingreso</font></th>
        <th scope="col"><font color="#900C3F">Capacitación</font></th>
        {{-- <th scope="col"><font color="#900C3F  ">Comenzar</font></th>
        <th scope="col"><font color="#900C3F  ">Finalizar</font></th> --}}
        
      </tr>
    </thead>
    <tbody>
        @foreach($asis as $asi)
      <tr>
        <th scope="row" >{{$asi->ida}}</th>
        <th>{{$asi->Nombre." ".$asi->apellido}}</th>
        <th>{{$asi->role}}</th>
        <th>{{$asi->correo}}</th>
        <th>{{$asi->fecha}}</th>
        <th>{{$asi->hora}}</th>
        <th>{{$asi->capacitacion}}</th>
        
        {{-- <th><button type="button" class="btn btn-primary" ><a href="{{URL::action('capacitacion@iniciarcapa',['id'=>$lis->id])}}"><i class="fa fa-play" aria-hidden="true"> Iniciar</i></a></button></th>

        <th><button type="button" class="btn btn-danger" ><a href="{{URL::action('capacitacion@desactivarcapa',['id'=>$lis->id])}}"><i class="fa fa-times" aria-hidden="true"> Finalizar</i></a></button></th> --}}
      </tr>
      @endforeach
    </tbody>
  </table>

@endsection


