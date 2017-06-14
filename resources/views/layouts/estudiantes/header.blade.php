<!DOCTYPE >
<html>
<head>
	<meta charset="utf-8">	
	<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('css/app.css') }}">	
	<link rel="stylesheet" type="text/css" href="{{ url('css/fontawesome.css') }}">	
  <link href="{{ url('css/jquery.toast.css') }}" rel="stylesheet">    
	@yield('librerias_css')
	<title> {{ $title }} </title>
</head>
<body>
<div class="container-fluid">

<div class="container-fluid header-background">

<div class="container header">
	<div class="row">

		<div class="col-md-2 head-nav header-inicio"> <a href="{{ url('/') }}"> <span class="fa fa-home fa-3x"></span> </a>   </div>
		<div class="col-md-2 col-md-offset-3 head-nav header-logo"> <img class="l" src="{{ url('img/logo_.png') }}"> </div>
		<div class="col-md-2 head-nav header-usuario pull-right">

    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
    <span class="fa fa-user fa-3x img-icon-user"></span>
    </a>

    <ul class="dropdown-menu dropdown-usermenu pull-right">
      <li class="nombre"> {{ Auth::user()->fullName()  }} </li>
      <li> <a href="#"> <span class="badge bg-red pull-right"></span>  <span>-</span>  </a> </li>
      <li> <a href="#"> <span class="badge bg-red pull-right"></span>  <span>-</span>  </a> </li>
      <li> <a href="#" onclick="document.getElementById('logout').submit()"> <i class="fa fa-sign-out pull-right"></i>  <span>Salir </span>  </a> <form style="display:none" action="{{ url('logout') }}" id="logout" method="POST">
          {{ csrf_field() }}
          {{ method_field('post') }}
        </form>
      </li>
    </ul>

		</div>
	</div>
</div>

</div>

<div class="container titulo">
  <div class="row">
    <div class="col-md-12 text-center">
      <h2 class="titular">
      <?php $icons = ['Inicio' => 'home' , 'Modulo' => 'book' , 'Componentes' => 'edit' ]; ?>
      <span class="fa fa-{{ $icons[$titulo_pagina] }}"></span> Modulos de estudio </h2>
    </div>
  </div>
</div>

@yield('contenido')

