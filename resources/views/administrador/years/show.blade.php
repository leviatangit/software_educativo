@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li> <a href="{{ route('years.index')  }}"> Años </a> </li>
	<li class="active"> {{ $year->f_academico() }} </li>
@endsection

@section('js')

@endsection

@section('contenido_pagina')

<div class="white-box w-years">
	<div class="dropdown otros-modulos pull-right">
	  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">{{ $year->f_academico() }} <span class="caret"></span></button>
	  <ul class="dropdown-menu">
	  @foreach( $years as $y )
	  	@if( $y->desde != $year->desde )
	    <li><a href="{{ route('years.show', [$y->id]) }}">{{ $y->f_academico() }}</a></li>  	    
	   	@endif
	    @endforeach
	  </ul>
	</div> 
</div>		

<div class="row">
	<div class="col-lg-4 col-sm-6 col-xs-12">
	    <div class="white-box analytics-info">
	        <h3 class="box-title">-</h3>
	        <ul class="list-inline two-part">
	            <li>
	                <div id="sparklinedash"><canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas></div>
	            </li>
	            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">-</span></li>
	        </ul>
	    </div>
	</div>
	<div class="col-lg-4 col-sm-6 col-xs-12">
	    <div class="white-box analytics-info">
	        <h3 class="box-title">-</h3>
	        <ul class="list-inline two-part">
	            <li>
	                <div id="sparklinedash2"><canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas></div>
	            </li>
	            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">-</span></li>
	        </ul>
	    </div>
	</div>
	<div class="col-lg-4 col-sm-6 col-xs-12">
	    <div class="white-box analytics-info">
	        <h3 class="box-title">-</h3>
	        <ul class="list-inline two-part">
	            <li>
	                <div id="sparklinedash3"><canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas></div>
	            </li>
	            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">-</span></li>
	        </ul>
	    </div>
	</div>
</div>

<div class="row">
	<div class="col-md-6 col-lg-6 col-sm-12">
	    <div class="white-box">
	        <h3 class="box-title">Estudiantes Inscritos <span class="btn num_est"> {{ count($evaluaciones)  }} </span> </h3>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <th>Nombre</th>
	                        <th>Apellido</th>
	                        <th>Cedula</th>
	                        <th>Secciòn</th>
	                        <th>Acciones</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
	                @foreach( $evaluaciones as $evaluacion )
	                    <tr>
	                        <td> {{ $evaluacion->estudiante->user->nombre }} </td>
	                        <td> {{ $evaluacion->estudiante->user->apellido }} </td>
	                        <td> {{ $evaluacion->estudiante->user->cedula }} </td>
	                        <td> {{ $evaluacion->estudiante->seccion->nombre }} </td>
	                        <td>
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-trash"></span> </a> 
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-trash"></span> </a> 
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-trash"></span> </a>
	                         </td>
	                    </tr>
	               @endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>

	<div class="col-md-6 col-lg-6 col-sm-12">
	    <div class="white-box">
	        <h3 class="box-title">Evaluaciones realizadas</h3>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <th>Estudiante</th>
	                        <th>Secciòn</th>
	                        <th>Modulo</th>
	                        <th>Status</th>
	                        <th>Acciones</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
	                @foreach( $year->estudiantes as $estudiante )
	                    <tr>
	                        <td> {{ $estudiante->user->nombre }} </td>
	                        <td> {{ $estudiante->user->apellido }} </td>
	                        <td> {{ $estudiante->user->cedula }} </td>
	                        <td> {{ $estudiante->seccion->nombre }} </td>
	                        <td>
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-trash"></span> </a> 
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-trash"></span> </a> 
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-trash"></span> </a>
	                         </td>
	                    </tr>
	               @endforeach
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>

</div>

@endsection