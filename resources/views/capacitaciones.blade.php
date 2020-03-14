

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


<table class="table table-striped">
    <thead class="thead-dark">
      <tr>
        <th scope="col"><font color="#2325E8">#</font></th>
        <th scope="col"><font color="#2325E8">Capacitación</font></th>
        <th scope="col"><font color="#2325E8">Fecha</font></th>
        <th scope="col"><font color="#2325E8">Hora</font></th>
        <th scope="col"><font color="#2325E8">Lugar</font></th>
        <th scope="col"><font color="#2325E8">Comenzar</font></th>
        <th scope="col"><font color="#2325E8">Finalizar</font></th>
        
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


