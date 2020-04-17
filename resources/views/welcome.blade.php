
@extends('frontLayout.app')
@section('title')
 Inicio
@stop

@section('style')
<style>
    #ti{
        text-size-adjust: auto;
        font-size: 5em;
    }
</style>
@stop
@section('content')



<div class="content">

    @if (Sentinel::check() )
    <button type="button" class="btn btn-link">

        <strong>Bienvenido!</strong>

           {{Sentinel::getUser()->first_name}} 
           {{Sentinel::getUser()->last_name}} 
        |  {{Sentinel::getUser()->email}} 
    </button>
    @endif
    

<div class="title m-b-md" id="ti">
    
Control de Asistencia  <i class="fa fa-qrcode fa-1x" aria-hidden="true"> QR</i>

<a href="#">
<img src="{{ URL::asset('/images/capa.jpg') }}" alt="" title="Nosotros te Capacitamos" width="550em">
</a>

</div>

        <div class="links">
            <a href="#"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram  fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter  fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></i></a>
        </div>

</div>
@endsection

@section('scripts')


@endsection
