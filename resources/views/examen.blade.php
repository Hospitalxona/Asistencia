@extends('backLayout.app')
@section('title')
Create examen
@stop


<script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>


<script type="">

$(document).ready(function() {
    $('#example').DataTable();
} );
  
</script>




@section('content')

        <div class="panel panel-default">
        <div class="panel-heading">Crear Nuevo Examen </div>

        <div class="panel-body">


            

            <form action="{{Route('examenCreate')}}" method="post" class="form-horizontal files">
                {{csrf_field()}}
                <ul>
       {{-- <div class="form-group">

                <label for="" class="col-md-4 control-label">ID</label>

            <div class="col-sm-6">
                <input type="text" class="form-control" name="id" id="id" value="{{$ide}}">
            </div>

        </div>             --}}

        <div class="form-group">

            <label for="" class="col-md-4 control-label">Nombre del Examen</label>

            <div class="col-sm-6">    

                <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-pencil" aria-hidden="true"></i></span>
                <input type="text" class="form-control" name="nombre" id="nombre">

                </div>

            </div> 

        </div>   

        
        
        
<div class="form-group">

            <label for="" class="col-md-4 control-label">Contenido Embebido (iframe)</label>
    
    <div class="col-sm-6">

        <div class="input-group">

            <span class="input-group-addon"><i class="fa fa-code  fa-2x" aria-hidden="true"></i></span>
                <textarea name="iframe"    id="editor" rows="7" class="form-control" placeholder="Ingresa el contenido embebido (iframe) de audio o video"></textarea>
        
        </div>
        
    </div>

</div> 

       
        <div class="form-group" >

            <div class="col-sm-offset-4 col-sm-6">
        <button type="submit"  class="btn btn-success btn-lg btn-block">
            <i class="fa fa-floppy-o" aria-hidden="true"></i> Guardar
        </button>
            </div>
           
        </div>
       


        </ul>

            </form>

            
<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#25BD7C ">#</font></th>
        <th scope="col"><font color="#25BD7C ">Título</font></th>
        <th scope="col"><font color="#25BD7C ">Estatus</font></th>  
        <th scope="col"><font color="#25BD7C ">Acciones</font></th>      
      </tr>
    </thead>
    <tbody>
        @foreach($examens as $exa)
      <tr>
        <th scope="row" >{{$exa->id}}</th>
        <th>{{$exa->title}}</th>
        <th>{{$exa->status}}</th>
 
        
        <th><button type="button" class="btn btn-success btn-block" >
            <a href="" style="color:aliceblue;">
                <i class="fa fa-check-circle-o" aria-hidden="true"></i> Activo</a></button></th>

        <th><button type="button" class="btn btn-danger btn-block" >
            <a href="" style="color:aliceblue;">
                <i class="fa fa-times-circle-o" aria-hidden="true"></i> Inactivo</a></button></th>    
       </tr>
      @endforeach
    </tbody>
  </table>


  </div>
    </div>

</div>






@stop

@section('scripts')

@endsection