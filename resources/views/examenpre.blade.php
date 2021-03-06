

@extends('backLayout.app')
@section('title')

ExamenPre

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

#hr{
    height: 12px;

    border-top: 10px solid #8c8b8b; 
}


</style>



<script src="https://code.jquery.com/jquery-3.4.1.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>

{{-- <link rel="stylesheet" href="{{asset('/css/button.css')}}"> --}}


<script type="text/javascript">

$(document).ready(function() {
    $('#example').DataTable();
    
})

$("#prueba").click(function(){

$("#con").hide();

});


</script>



<div class="panel panel-default">

@foreach($examens as $exa)
    @if($exa->status == "Activo")
    @if($exa->tipo == "pre")
    


        
        <div class="panel-heading"> <h4> Nuevo Examen <small>  {{$exa->title}} </small>  </h4>  

           
  
            {{-- <div align="right">
                    @if($exa->status == "Activo")
                    <span id="activo">{{$exa->status}}</span>
                    @endif
                </div>    --}}
        </div>

        <form action="{{Route('createCal')}}" method="post" class="form-horizontal files">
            {{csrf_field()}}
            
            <div align="right">
            
            {{-- <label for="">title</label> --}}
            <input type="text" value="{{$exa->title}}" name="title" hidden>
            {{-- <label for="">ide</label> --}}
            <input type="text" name="ide" value="{{$exa->id}}" hidden>
            {{-- <label for="">idu</label> --}}
            <input type="text" name="idu" value="{{Sentinel::getUser()->id}}" hidden>
            <br>
            <input type="submit" class="btn btn-purple" value="Continuar">
            </div>

        </form>


        <div class="panel-body">

            
   



            <div class="container" id="con">         
                
                {!! $exa->iframe !!}

            </div>  

            <hr id="hr">

        @endif
        @endif
@endforeach


      

    </div>
</div>


@endsection


