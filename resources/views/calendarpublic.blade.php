@extends('frontLayout.normalStyle')
@section('title')

Calendario

@stop

@section('style')



{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/> --}}

<link rel="stylesheet" href="{{asset('/css/style.min.css')}}">


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
    
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script> 
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> --}}

{{-- <script  src="{{asset('/js/Jquery.min.js')}}"></script> --}}
<script  src="{{asset('/js/fullcalendar.min.js')}}"></script>
{{-- <script  src="{{asset('/js/moment.min.js')}}"></script>  --}}
{!! $calendar->script() !!}

