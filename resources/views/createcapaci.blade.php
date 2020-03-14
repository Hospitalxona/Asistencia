@extends('backLayout.app')
@section('title')
Create capa
@stop


@section('content')

        <div class="panel panel-default">
        <div class="panel-heading">Crear nueva capacitación</div>

        <div class="panel-body">


            

            <form action="{{Route('guardacapacitacion')}}" method="post" class="form-horizontal files">
                {{csrf_field()}}
                <ul>
       <div class="form-group">

                <label for="" class="col-md-4 control-label">ID</label>

            <div class="col-sm-6">
                <input type="text" class="form-control" name="id" id="id" value="{{$idc}}">
            </div>

        </div>            

        <div class="form-group">

            <label for="" class="col-md-4 control-label">Capacitación</label>

            <div class="col-sm-6">
                <input type="text" class="form-control" name="capacitacion" id="capacitacion" value="">
            </div>

        </div>   

        <div class="form-group">

            <label for="" class="col-md-4 control-label">Fecha</label>

            <div class="col-sm-6">
                <input type="date" class="form-control" name="fecha" id="fecha" value="">
            </div>

        </div> 

        <div class="form-group">

            <label for="" class="col-md-4 control-label">Hora</label>

            <div class="col-sm-6">
                <input type="time" class="form-control" name="hora" id="hora" value="">
            </div>

        </div> 

        <div class="form-group">

            <label for="" class="col-md-4 control-label">Lugar</label>

            <div class="col-sm-6">
                <input type="text" class="form-control" name="lugar" id="lugar" value="Enseñanza" readonly>
            </div>

        </div> 


       
        <div class="form-group" >

            <div class="col-sm-offset-4 col-sm-6">
            <input type="submit"  value="Guardar" class="btn btn-success form-control">
            </div>
           
        </div>
       


        </ul>

            </form>

  </div>
    </div>

</div>





@stop

@section('scripts')

@endsection