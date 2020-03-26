<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.5/flatly/bootstrap.min.css" rel="stylesheet">
	<link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href="css/style.css" rel="stylesheet">

    {{-- Bootstrap --}}
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

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
        
        /* #foot{

            background-color:ghostwhite;
           
        } */
        </style>
	@yield('style')
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top">
	    <div class="container">
	        <!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
                <a class="navbar-brand" href="{{url('/')}}">
                    <i class="fa fa-university" aria-hidden="true"></i> Inicio</a>
	        </div>

			<div class="collapse navbar-collapse" id="navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">

                    @if (!Sentinel::getUser())
        
                       <li><a href="{{ url('event') }}">
                        <i class="fa fa-calendar" aria-hidden="true"></i> Calendario</a></li>
                        <li><a href="{{ url('login') }}">
                            <i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesión</a></li>
                        {{-- <li><a href="{{ url('qrLogin') }}">Qr Login</a></li> --}}
                        <li><a href="{{ url('register') }}">
                            <i class="fa fa-user-plus" aria-hidden="true"></i> Registrarse</a></li>
                     @endif

					 @if ($user=Sentinel::getUser())
                    {{-- $user=Sentinel::getUser(); --}}
                     @if ($user->inRole('admin'))

                     
                        <li><a href="{{ url('event') }}">
                            <i class="fa fa-calendar" aria-hidden="true"></i> Calendario</a></li>
                        <li><a href="{{url('my-qrcode')}}">
                            <i class="fa fa-hospital-o" aria-hidden="true"></i> Panel de Control</a></li>
                        <li><a href="{{ url('capacitaciones') }}">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i> Capacitaciones</a></li>
                        <li><a href="{{url('user/logout/now')}}">
                            <i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>
                    
                    @endif
                    @endif

                    @if ($user=Sentinel::getUser())
                    @if (!$user->inRole('admin'))
        
                    <li><a href="{{ url('eventPublic') }}">
                     <i class="fa fa-calendar" aria-hidden="true"></i> Calendario</a></li>
                     <li><a href="{{url('my-qrcode')}}">
                        <i class="fa fa-hospital-o" aria-hidden="true"></i> Control</a></li>
                    <li><a href="{{url('user/logout/now')}}">
                        <i class="fa fa-sign-out" aria-hidden="true"></i> Salir</a></li>
                   
                  @endif
                  @endif


				</ul>
			</div>

	    </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		@yield('content')
	</div>

	<hr/>

	<div class="container" id="foot">
	    &copy; {{ date('Y') }}. <strong> Created by <a href="#"> B&D Solutions</a>
        </strong> 
            <br/>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	 <script type="text/javascript">
      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
        });
    </script>
    @yield('scripts')
</body>
</html>