
@extends('backLayout.app')
@section('title')

ExamenPos

@stop
@section('content')


<style>

#activo{

    color: aliceblue;
    background-color:#37CF8E  ;
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    padding: 10px;
    
    
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

<script>
    $(document).ready(function()
    {
       $("#mostrarmodal").modal("show");
    });
  </script>


<div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h3>Registros Guardados</h3>
         </div>
         <div class="modal-body">
          <p><span id="activo"> DATOS GUARDADOS EXITOSAMENTE ! </span></p> 
   
     </div>
         <div class="modal-footer">
        {{-- <a href="#" data-dismiss="modal" class="btn btn-danger">Cerrar</a> --}}
         <a href="{{url('showExampos')}}"  class="btn btn-danger">Cerrar</a>
         </div>
    </div>
 </div>
</div>


<div class="panel panel-default">

</div>


@endsection


