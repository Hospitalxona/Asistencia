@extends('frontLayout.normalStyle')
@section('title')

Calendario

@stop

@section('style')

<style>


.fc-event {
    font-family:cursive;
    background-color: #0C6190;
    text-decoration-color: aliceblue;
    width:fit-content;
  
}



</style>



{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> --}}

<link rel="stylesheet" href="{{asset('/js/style.min.css')}}">


@endsection

@section('content')

<div class="container">
@if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
   <div class="panel panel-default">
         <div class="panel-heading">
             <h3>Calendario de Cursos y Capacitaciones  <small>Hospital Municipal Xonacatlán | Vicente Guerrero Bicentenario</small> </h3>
         </div>
         <div class="panel-body" id="cal">
            {!! $calendar->calendar() !!}
        </div>
    </div>
</div>

@endsection


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script> 
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> --}}

{{-- <script  src="{{asset('/js/Jquery.min.js')}}"></script> --}}
<script  src="{{asset('/js/fullcalendar.min.js')}}"></script>
{{-- <script  src="{{asset('/js/moment.min.js')}}"></script>  --}}
{!! $calendar->script() !!}

