
@extends('frontLayout.app')
@section('title')
Home Page
@stop

@section('style')

@stop
@section('content')
<div class="content">
<div class="title m-b-md">
    Laravel  Qr Code Starter page
    
</div>
@if (Sentinel::check() )
     Your name : {{Sentinel::getUser()->first_name}} <br>
     Last name : {{Sentinel::getUser()->last_name}} <br>
     E-mail : {{Sentinel::getUser()->email}} <br>
    @endif

<div class="links">
    <a href="https://github.com/Hospitalxona/Asistencia">GitHub</a>
    <a href="#">My Website</a>
    <a href="#">Facebook</a>
    <a href="#">Youtube</a>
</div>
</div>
@endsection

@section('scripts')


@endsection
