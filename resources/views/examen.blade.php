

@extends('backLayout.app')
@section('title')

Capacitaciones

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
    
    <div class="panel-heading">Crear Nuevo Examen </div>

    <div class="panel-body">


        <form action="{{Route('examenCreate')}}" method="post" class="form-horizontal files">
            {{csrf_field()}}
            <ul>
    
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

        <label for="" class="col-md-4 control-label">Tipo de Examen</label>

        <div class="col-sm-6">    

            <div class="input-group">

        <span class="input-group-addon"><i class="fa fa-file" aria-hidden="true"></i></span>
           <select class="form-control" name="tipo" id="tipo">
               <option value=""></option>
               <option value="pre">Pre</option>
               <option value="pos">Post</option>
           </select>

            </div>

        </div> 

    </div> 




<div class="form-group">

    <label for="" class="col-md-4 control-label">Contenido Embebido (iframe)</label>

        <div class="col-sm-6">

        <div class="input-group">

        <span class="input-group-addon"><i class="fa fa-code  fa-2x" aria-hidden="true"></i></span>
            <textarea name="iframe"    id="editor" rows="6" class="form-control" placeholder="Ingresa el contenido embebido (iframe) de audio o video"></textarea>

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

<br>

<table  class="table table-hover table-dark table-bordered" id="example">
    <thead>
      <tr>
        <th scope="col"><font color="#25BD7C ">#</font></th>
        <th scope="col"><font color="#25BD7C ">Título del Examen</font></th> 
        <th scope="col"><font color="#25BD7C ">Tipo de Examen</font></th> 
        <th scope="col"><font color="#25BD7C ">Estatus</font></th>  
        <th scope="col"><font color="#25BD7C ">Acciones</font></th>   
        
      </tr>
    </thead>
    <tbody>
        @foreach($examens as $exa)
      <tr>
        <th scope="row" >{{$exa->id}}</th>
        <th>{{$exa->title}}</th>
        <th>{{$exa->tipo}}</th>
        @if($exa->status == "Activo")
        <th><span id="activo">{{$exa->status}}</span></th>
        @endif
        @if($exa->status == "Inactivo")
        <th><span id="Inactivo">{{$exa->status}}</span></th>
        @endif
        @if($exa->status == "indef")
        <th><span id="indef">{{$exa->status}}</span></th>
        @endif
        
       

        
        <th><button type="button" class="btn btn-success btn-md" >
            <a href="{{URL::action('ExamenController@changeStatus',['id'=>$exa->id])}}" style="color:aliceblue;">
                <i class="fa fa-floppy-o" aria-hidden="true"> Activo</i></a></button>

        <button type="button" class="btn btn-danger  btn-md" >
            <a href="{{URL::action('ExamenController@inactiveStatus',['id'=>$exa->id])}}" style="color:aliceblue;">
                <i class="fa fa-times" aria-hidden="true"> Inactivo</i></a></button></th>
      </tr> 
      @endforeach
    </tbody>
  </table>

    </div>
</div>

@endsection


