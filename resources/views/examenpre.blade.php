

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

.btn-purple{

    background-color: rgb(103, 58, 183);
    color:rgb(255, 255, 255);
    cursor:pointer;
    display:inline-block;
    font-family:Arial, Helvetica, sans-serif;
    font-size: 14px;
    font-weight: 500;
    letter-spacing: .25px;
    line-height: 23px;
    text-decoration: none;
    text-transform: none;
    min-width: auto;
    outline: none;
    overflow: hidden;
    position: relative;
    /* float:right; */
    text-align: center;
    -webkit-tap-highlight-color: transparent;
    z-index: 0;
        }



</style>


<script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

{{-- <link rel="stylesheet" href="{{asset('/css/button.css')}}"> --}}


<script type="text/javascript">

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
              </div>   

             
     @endif
@endforeach
      

    </div>
</div>


@endsection


