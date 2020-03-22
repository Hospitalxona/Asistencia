@extends('frontLayout.app')
@section('title')
Register
@stop
@section('content')
<div class = "container">
  <div class="wrapper">
    <div class="panel-heading">
       <div class="panel-title text-center">
          <h1 class="title">Registro</h1>
          <hr />
        </div>
    </div>
    @if (Session::has('message'))
     <div class="alert alert-{{(Session::get('status')=='error')?'danger':Session::get('status')}} " alert-dismissable fade in id="sessions-hide">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
       <strong>{{Session::get('status')}}!</strong> {!! Session::get('message') !!}
      </div>
    @endif 
     {{ Form::open(array('url' => route('register'), 'class' => 'form-horizontal form-signin','files' => true)) }}    
        {!! csrf_field() !!}
            
            <div class="form-group  {{ $errors->has('first_name') ? 'has-error' : ''}}">
              <label for="first_name" class="cols-sm-2 control-label">Nombre</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  {!! Form::text('first_name', null, ['class' => 'form-control','placeholder '=>'Ingresa tu Nombre']) !!}
                </div>
                {!! $errors->first('first_name', '<p class="help-block">:message</p>') !!}
              </div>
            </div>
            <div class="form-group  {{ $errors->has('last_name') ? 'has-error' : ''}}">
              <label for="last_name" class="cols-sm-2 control-label">Apellido</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                  {!! Form::text('last_name', null, ['class' => 'form-control','placeholder '=>'Ingresa tu apellido']) !!}
                </div>
                 {!! $errors->first('last_name', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group  {{ $errors->has('email') ? 'has-error' : ''}}">
              <label for="email" class="cols-sm-2 control-label">Correo</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                  {!! Form::email('email', null, ['class' => 'form-control','placeholder '=>'Correo']) !!}
                </div>
                 {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
              </div>
            </div>


            <div id="role" class="form-group {{ $errors->has('role') ? 'has-error' : ''}}">
              <label for="role" class="cols-sm-2 control-label">Rol</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                  {!! Form::select('role', $roles, null, ['class' => 'form-control']) !!}                </div>
                  {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

         

            <div class="form-group  {{ $errors->has('password') ? 'has-error' : ''}}">
              <label for="password" class="cols-sm-2 control-label">Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                   {!! Form::password('password', ['class' => 'form-control','rel'=>'gp' ,'data-size'=>'10' ,'data-character-set'=>'a-z,A-Z,0-9,#' ,'placeholder '=>'Contraseña']) !!}
                
                </div>
                {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group  {{ $errors->has('password_confirmation') ? 'has-error' : ''}}">
              <label for="confirm" class="cols-sm-2 control-label">Confirmar Contraseña</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  {!! Form::password('password_confirmation', ['class' => 'form-control','rel'=>'gp' ,'data-size'=>'10' ,'data-character-set'=>'a-z,A-Z,0-9,#' ,'placeholder '=>'Confirma tu contraseña']) !!}
                
                </div>
                {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
              </div>
            </div>

            <div class="form-group  {{ $errors->has('password') ? 'has-error' : ''}} ">
              <button class="btn btn-primary btn-lg btn-block register-button" type="submit" >Registrarse</button>
              
            </div>
            <div class="login-register">
                    <a href="{{url('login')}}">
                      <i class="fa fa-sign-in" aria-hidden="true"></i>  <strong>Iniciar sesión</strong> </a>
                    @if ($errors->has('global'))
                    <span class="help-block danger">
                        <strong style="color:red" >{{ $errors->first('global') }}</strong>
                    </span>
                  @endif 
            </div>     
    {{ Form::close() }}   
  </div>
</div>
@endsection

@section('scripts')


@endsection