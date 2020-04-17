<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{ URL::asset('/images/qr.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
	<link href="css/style.css" rel="stylesheet">
	<!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            body {
			padding-top: 70px;
		}
        </style>
	@yield('style')
</head>
<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
                   
                <a class="navbar-brand" href="{{url('/')}}">
                    <i class="fa fa-university" aria-hidden="true"></i> Inicio</a>
	        
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                        <ul class="navbar-nav ml-auto">

                    @if (!Sentinel::getUser())
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('event') }}">
                                <i class="fa fa-calendar" aria-hidden="true"></i> Calendario</a>
                            </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('login') }}">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesión</a>
                        </li>
                        {{-- <li><a href="{{ url('qrLogin') }}">Qr Login</a></li> --}}
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('register') }}">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</a>
                        </li>
                     @endif

					 @if ($user=Sentinel::getUser())
                    {{-- $user=Sentinel::getUser(); --}}
                     @if ($user->inRole('admin'))

                     
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('event') }}">
                            <i class="fa fa-calendar" aria-hidden="true"></i> Calendario</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('my-qrcode')}}">
                            <i class="fa fa-hospital-o" aria-hidden="true"></i> Panel de Control</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('capacitaciones') }}">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i> Capacitaciones</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('user/logout/now')}}">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
                        </li>
                    
                    @endif
                    @endif

                    @if ($user=Sentinel::getUser())
                    @if (!$user->inRole('admin'))
        
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ url('eventPublic') }}">
                     <i class="fa fa-calendar" aria-hidden="true"></i> Calendario</a>
                    </li>
                     <li class="nav-item active">
                         <a class="nav-link" href="{{url('my-qrcode')}}">
                        <i class="fa fa-hospital-o" aria-hidden="true"></i> Control</a>
                    </li>
                    <li class="nav-item active">
                        <a  class="nav-link" href="{{url('user/logout/now')}}">
                        <i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a>
                    </li>
          
                   
                  @endif
                  @endif


                </ul>
              </div>
            </nav>

	<div class="container">
		@yield('content')
	</div>

	<hr/>

	<div class="container">
	    &copy; {{ date('Y') }}. Created by <a href="http://www.B&DSolutions.com"> B&D Solutions</a>
	    <br/>
	</div>


</body>
</html>