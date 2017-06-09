<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">  
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome.css') }}">     
    <link rel="stylesheet" type="text/css" href="{{ url('css/login.css') }}">   
    <title> Login </title>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-md-8 col-md-offset-2 login-box">
        <div class="panel panel-default" style="border: none">
        <h2 class="login-titulo"> <span class="fa fa-user"></span> Registro </h2>        
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group{{ $errors->has('cedula') ? ' has-error' : '' }}">
                        <label for="cedula" class="col-md-4 control-label">Cedula</label>
                        <div class="col-md-6">
                            <input id="cedula" type="number" class="form-control" name="cedula" value="{{ old('cedula') }}" required autofocus>
                            @if ($errors->has('cedula'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('cedula') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                     <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                        <label for="nombre" class="col-md-4 control-label">Nombre</label>
                        <div class="col-md-6">
                            <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required>
                            @if ($errors->has('nombre'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('apellido') ? ' has-error' : '' }}">
                        <label for="apellido" class="col-md-4 control-label">Apellido</label>
                        <div class="col-md-6">
                            <input id="apellido" type="text" class="form-control" name="apellido" value="{{ old('apellido') }}" required >
                            @if ($errors->has('apellido'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('apellido') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="col-md-4 control-label">Password</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" name="password" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="id_seccion" class="col-md-4 control-label">Secciòn</label>
                        <div class="col-md-6">
                            <select id="id_seccion" class="form-control" name="id_seccion" required>
                            @foreach( $secciones as $seccion )
                                <option value="{{ $seccion->id }}"> {{ $seccion->nombre }} </option>
                            @endforeach
                            </select>
                        </div>                        
                    </div>



                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">  Registrar  </button>
                            <a href="{{ url('login') }}" class="btn btn-danger"> Cancelar </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>        
    </div>
</div>
</div>
