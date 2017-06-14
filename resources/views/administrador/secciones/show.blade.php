@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li class="active"> Secciòn {{ $seccion->nombre }} </li>
@endsection

@section('js')

	@if( count( $errors ) > 0 )
	<script type="text/javascript">
		$(function(){
			$('#ModalCrearEstudiante').modal();
		})
	</script>
	@endif

@endsection

@section('contenido_pagina')

<div class="white-box w-years">
	<h3 class="titulo_bienvenida" style="float: left;margin-top: 0"> Secciòn <strong>{{ $seccion->nombre }}</strong>, 

	@if( $seccion->id_profesor )
		<a class="btn btn-default" href="{{ route('users.show', [ $seccion->id_profesor ]) }}"> <span class="fa fa-user"> </span> {{ $seccion->profesor->fullName() }} </a>
	@else
        <a class="btn btn-default btn-xs" href="#ModalAsignar" data-toggle="modal" data-id_seccion="{{ $seccion->id }}"> <span class="fa fa-spin fa-spinner"></span> asignar</a>
	@endif

	 </h3>

	<div class="dropdown otros-modulos pull-right">
	  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown"><span class="caret"></span></button>
	  <ul class="dropdown-menu">
	    <li><a href="#">{{ $seccion->nombre }}</a></li>  	    
	  </ul>
	</div> 
</div>		

<div class="row">


<!-- *************** EvALUACIONES ***************  -->
<?php 
	$arr = [
		'Default' => [ 'icon' => 'fa-gear fa-spin',  'text' => 'No configurada' ],
		'Ready'   => [ 'icon' => 'fa-spin fa-spin',  'text' => 'Preparada' ],
		'Active'  => [ 'icon' => 'fa-arrow-up',         'text' => 'Activa' ],
		'Finish'  => [ 'icon' => 'fa-check',            'text' => 'Finalizada' ],
	];
?>

@foreach( $seccion->modulo_evaluaciones as $me )
	
	<?php $status = $me->status;

		$icon = $arr[$status]['icon'];
		$text = $arr[$status]['text'];
	 ?>
	<div class="col-lg-4 col-sm-6 col-xs-12">
	    <a href="{{ route('seccion.configurar_evaluacion' , [$me->id]) }}" class="modulo-button m-{{ $status }}">
	    <div class="white-box analytics-info box-evalacion">
	    		<!-- Informaciòn -->
	    		<div class="col-md-9 info">	    			
		        	<h3 class="box-title"> Modulo {{ $me->modulo->id }}</h3> 
		        	<div class="sub_info">
		        		<?php  

		        		$resp = ['aprobada' => '-', 'reprobada' => '-' , 'sin_calificar' => '-'  ];  if( $status =! 'Default' ) $resp = $me->calcular();
		        		 ?>
		        		<!--  ESTUDIANTES APROBADOS -->
			        	<span class="btn btn-xs btn-default"> <span class="icono icono-aprobado fa fa-user"></span> <span class="valor">{{ $resp['aprobada'] }}
			        	</span> </span>
		        		<!--  /ESTUDIANTES APROBADOS -->

		        		<!--  ESTUDIANTES REPROBADOS -->
			        	<span class="btn btn-xs btn-default"> <span class="icono icono-noaprobado fa fa-user"></span> <span class="valor"> {{ $resp['reprobada'] }} </span> </span>	
		        		<!--  ESTUDIANTES REPROBADOS -->
		        		
		        		<!--  EVALUACIONES SIN CALIFICAR  -->
			        	<span class="btn btn-xs btn-default"> <span class="icono icono-nocorregido fa fa-eye"></span> <span class="valor"> {{ $resp['sin_calificar'] }}  </span> </span>	
		        		<!--  / EVALUACIONES SIN CALIFICAR -->
		        	</div>
	    		</div>
	    		<!-- Status -->
	    		<div class="col-md-3 status">	    		
		    		<span class="fa {{ $icon }} fa-3x"></span>
		    		<span class="nombre-status"> {{ $text }} </span>
	    		</div>	
	    </div>
	    </a>
	</div>

@endforeach

</div>

<div class="row">
	<div class="col-md-6 col-lg-6 col-sm-12">
	    <div class="white-box">
	        <h3 class="box-title">ESTUDIANTES REGISTRADOS
	        <!-- Cantidad de estudiantes -->
	        <span class="btn btn-default btn-xs cant_est" style="margin-left:20px;"> 
	        @if( count( $seccion->estudiantes ) )
	        <a style="color: black" href="{{ route( 'estudiantes.seccion.index' , [ $seccion->id ] ) }}">
	        {{ count( $seccion->estudiantes ) }}         	
	        </a>	        
	         @else
	         0
	         @endif
	         </span>

	         <!-- Registrar estudiantes -->
        		<a class="btn btn-default btn-xs" href="#ModalCrearEstudiante" data-toggle="modal"> <span class="fa fa-user-plus"></span></a>

	         </h3>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <th>Nombre</th>
	                        <th>Cedula</th>
	                        <th>Status</th>
	                        <th>Evaluaciones</th>
	                        <th>Acciones</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
	                @foreach( $seccion->estudiantes->take(10) as $estudiante )
	                    <tr>
	                        <td> {{ $estudiante->user->fullName() }} </td>
	                        <td> {{ $estudiante->user->cedula }} </td>
	                        <td> Activo </td>
	                        <td> <a href="{{ route('estudiantes.evaluaciones', [$estudiante->id]) }}" class="btn btn-xs btn-default"> {{ count($estudiante->evaluaciones) }} </a> </td>

	                        <td>
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-eye"></span> </a> 
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-pencil"></span> </a> 
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
	        <h3 class="box-title">Evaluaciones realizadas

	        <!-- Cantidad de estudiantes -->
	        <span style="margin-left:20px" class="btn btn-xs btn-default cant_est"> 
	        @if( count( $seccion->evaluaciones ) )
	        <a href="{{ route( 'seccion.evaluaciones' , [ $seccion->id ] ) }}"></a>	        
	         {{ count( $seccion->estudiantes ) }}  
	         @else
	         0
	         @endif
	         </span>


	        </h3>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <th>Estudiante</th>
	                        <th>Secciòn</th>
	                        <th>Modulo</th>
	                        <th>Acciones</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
		                @foreach( $seccion->evaluaciones->take(10) as $evaluacion )
	                    <tr>
	                        <td> {{ $evaluacion->estudiante->user->nombre }} </td>
	                        <td> {{ $evaluacion->estudiante->user->apellido }} </td>
	                        <td> I </td>
	                        <td>
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-eye"></span> </a> 
		                         <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-pencil"></span> </a> 
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

@include('administrador.secciones.recursos.modal_asignar_profesor')
@include('administrador.secciones.recursos.modal_crear_estudiante')


@endsection