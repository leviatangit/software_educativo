@extends('layouts.estudiantes.master')

@section('contenido')

<div class="container secciones">
	<div class="row">
		<div class="col-md-4">  <span data-seccion="1" class="seccion activado pull-right" href="#"> <span class="fa fa-book"></span>   Modulos de estudio</span> </div>
		<div class="col-md-4">  <span data-seccion="2" style="margin:0 auto" class="seccion"  href="#"> <span class="fa fa-desktop"></span>  Componentes </span> </div>
		<div class="col-md-4">  <span data-seccion="3" class="seccion pull-left"  href="#"> <span class="fa fa-gamepad"></span> Juegos </span> </div>		
	</div>
</div>

<div class="container items">

<!-- MODULOS DE ESTUDIO  -->
	<div class="row row-seccion" data-seccion="1">
	@foreach( $modulos as $modulo )
		<div class="col-md-3 col-md-offset-1 col-sm-4 item-box"> 
			<a href="{{ route('modulo' , ['id' => $modulo->id ]) }}" class="item">
				<div class="item-header">
					<img src="{{  url('img/' . $modulo->imagen->nombre ) }}">									
				</div>
				<div class="item-descripcion"> {{ $modulo->nombre }}</div>
			</a> 
		</div>
	@endforeach
	</div>
<!-- / MODULOS -->

<!-- COMPONENTES  -->
	<div class="row row-seccion" data-seccion="2">	
		@foreach( $componentes as $componente )
			<div class="col-md-3 col-sm-4 item-box"> 
				<a  href="#" data-nombre="{{ $componente->titulo }}" data-id="{{ $componente->id }}" class="item item-c">
					<div class="item-header">
						<img src="{{ url('img/' . $componente->imagen->nombre) }}">					
					</div>
					<div class="item-descripcion">{{ $componente->nombre }}</div>
				</a> 
			</div>
		@endforeach
	</div>	
<!-- / COMPONENTES  -->

<!-- JUEGOS  -->
	<div class="row row-seccion" data-seccion="3">
		@foreach( $juegos as $juego )
			<div class="col-md-3 col-md-offset-1 col-sm-4 item-box"> 
				<a href="#" class="item">
					<div class="item-header">
						<img src="{{ url('img/' . $juego->imagen->nombre  ) }}">
					</div>
					<div class="item-descripcion">{{ $juego->nombre }}</div>
				</a> 
			</div>
		@endforeach
	</div>
</div>
	
</div>

@include('estudiantes.elementos.modal_componentes')

@endsection