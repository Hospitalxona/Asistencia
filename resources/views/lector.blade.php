@extends('frontLayout.app')
@section('title')

Asistencía

@stop
@section('content')

  <head>
    <title>Instascan</title>
     <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js" >
    </script>	
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 

  </head>
  <body>

    

    <form role="form" method="POST" action="{{ route('crear') }}">
        {{ csrf_field() }}
    
        <strong> <input class="form-control" style="color:#006D6C;" type="text" name="capacitacion" id="capa" value="{{$capacitacion->id}}" readonly></strong>
<br>
        <strong> <input class="form-control" style="color:#006D6C;" type="text" name="nombreca" id="nombreca" value="{{$nombre->nombre}}" readonly></strong>
    
        <input type="text" name="caja_valor" id="caja_valor" value="" hidden>
        <input type="submit" value="limpiar" id="guarda" hidden>
        </form>

        
    <div align="center">


        
    <h3 id="cabecera">Capacitacion: COVID-19 Coronavirus !!!</h3>
<br>
    <video id="preview"></video>



<br>

<h3 id="registro">"registro de Usuarios a la Capacitacion"</h3>

</div>

<input type="text" name="dato" id="dato" value="" hidden>


  



    
   
  

<script type="text/javascript">

        var usuarios;

        let scanner = new Instascan.Scanner(
            {
                video: document.getElementById('preview')
            }
        );
        scanner.addListener('scan', function(content) {
            alert('Escaneo encontrado: ' + content);
          //  window.open(content, "_blank");
            usuarios = content;
            document.getElementById('dato').value= usuarios;
            console.log(usuarios);
            document.getElementById('registro').innerHTML ="<h3> <font color='red'>Usuario registrado correctamente </font</h3>";
            document.getElementById("caja_valor").value = usuarios;
            document.getElementById("guarda").click();
            // window.location="crear";

            
        }); 

        

        
        Instascan.Camera.getCameras().then(cameras => 
        {
            if(cameras.length > 0){
                scanner.start(cameras[0]);
            } else {
                console.error("No se encuentra ninguna coincidencia!");
            }
        });
    </script>




    

 </body>
 @endsection
