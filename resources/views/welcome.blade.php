
@extends('frontLayout.app')
@section('title')
 Inicio
@stop

@section('style')

@stop
@section('content')



<div class="content">
<div class="title m-b-md">

Control de Asistencia  <i class="fa fa-qrcode fa-1x" aria-hidden="true"> QR</i>

<a href="#">
<img src="{{ URL::asset('/images/capa.jpg') }}" alt="" title="Nosotros te Capacitamos">
</a>


</div>
@if (Sentinel::check() )
     Nombre de usuario : {{Sentinel::getUser()->first_name}} <br>
     Apellido : {{Sentinel::getUser()->last_name}} <br>
     E-mail : {{Sentinel::getUser()->email}} <br>
    @endif

{{-- <div class="links">
    <a href="https://github.com/Hospitalxona/Asistencia">GitHub</a>
    <a href="#">My Website</a>
    <a href="#">Facebook</a>
    <a href="#">Youtube</a>
</div> --}}

        <div class="links">
            <a href="#"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram  fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter  fa-3x" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></i></a>
            <a href="#"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></a>
        </div>

</div>
@endsection

@section('scripts')


@endsection
