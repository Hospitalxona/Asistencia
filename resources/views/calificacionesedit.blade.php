@extends('frontLayout.app')
@section('title')

Edita Calificaciones

@stop
@section('content')

<form action="{{Route('calificaciones.update', $calificaciones->id)}}" method="GET">
    @method('PATCH')
    {{csrf_field()}}
<div class="jumbotron">
    <h1 class="display-4">Edita las Calificaciones</h1>
    <p class="lead">

        <div class="form-group">
            <label for="inputAddress">Pre-evaluación</label>
        <input type="text" class="form-control" name="calpre" value="{{$calificaciones->calpre}}">
          </div>
    </p>

          <hr class="my-4">
    <p>
          <div class="form-group">
            <label for="inputAddress">Post-Evaluación</label>
          <input type="text" class="form-control" name="calpos" value="{{$calificaciones->calpos}}">
          </div>
    </p>
    <button class="btn btn-primary btn-lg" type="submit">Guardar</button>
  </div>
</form>


@stop