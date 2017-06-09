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
		<div class="row">
		<h2 class="login-titulo"> Login </h2>
			<div class="col-md-6 box-inst">
				<div class="membrete">
					<p>U.E.N Julio German Roscio</p>
				</div>					
				<div class="logo">
					<img src="{{ url('img/logo_.png')}} " class="img-circle">
				</div>
			</div>	
			<div class="col-md-6 box-form">
				<form class="login" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

				<div class="form-group">
				<div class="input-group">
		              <span class="input-group-addon">
		                <i class="fa fa-user" aria-hidden="true"></i></span>
		              <input class="form-control" name="cedula" required="required" placeholder="Cedula" type="text">
	            	</div>
                      @if ($errors->has('cedula'))
                          <span class="help-block">
                              <strong>{{ $errors->first('cedula') }}</strong>
                          </span>
                      @endif		              
                      </div>

				<div class="input-group">
	              <span class="input-group-addon">
	                <i class="fa fa-key" aria-hidden="true"></i></span>
	              <input class="form-control" required="required" name="password" placeholder="Contraseña" type="password">
                      @if ($errors->has('password'))
                          <span class="help-block">
                              <strong>{{ $errors->first('password') }}</strong>
                          </span>
                      @endif			              
	            </div>
				  <button type="submit" class="btn btn-success btn-block"> <span class="fa"></span> Enviar</button>
				  <a class="btn btn-link btn-default" href="{{ route('password.request') }}"> Olvide Contraseña </a>
				  @if( App\Configuracion::find(1)->value == "true" )				  
				  <a class="btn btn-link btn-default" href="{{ route('register') }}"> Registro </a>				
				  @endif  
				</form>
			</div>				
		</div>
	</div>	
</div>
</div> <!-- /container -->

<script type="text/javascript" src="{{ url('js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ url('js/app.js') }}"></script>

</body>
</hmtl>

