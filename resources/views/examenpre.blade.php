

@extends('backLayout.app')
@section('title')

Capacitaciones

@stop
@section('content')


<style>

#activo{

    color: aliceblue;
    background-color: #25BD7C;
    padding: 2px;
    border-radius: 25px;
    
    
}

#Inactivo{

color: aliceblue;
background-color: #F6422C;
padding: 2px;
border-radius: 25px;


}
 

#indef{

color: aliceblue;
background-color: #FFC300;
padding: 2px;
border-radius: 25px;


}

iframe{

    width: 100%;
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

@foreach($examens as $exa)
    @if($exa->status == "Activo")

    <div class="panel-heading"> Nuevo Examen  <small>  {{$exa->title}} </small> 
       
    <div align="right">
        @if($exa->status == "Activo")
        <span id="activo">{{$exa->status}}</span>
        @endif
    </div>
        

    
    </div>

    <div class="panel-body">

      
              <div class="container">
                {!! $exa->iframe !!}
              </div>   
     @endif
@endforeach
      

    </div>
</div>


@endsection


