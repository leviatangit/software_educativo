@extends('layouts.estudiantes.master')

@section('contenido')

<div class="container container-modulo">
<div class="row header-modulo">
<div class="modulo">
	<div class="col-md-6">		
		<h3 class="titulo-modulo"> {{ $moduloNumero }}  </h3>
		<span class="nombre-modulo"> {{ $modulo->nombre }}</span>
	</div>

	<div class="col-md-6">
		<div class="dropdown otros-modulos pull-right">
		  <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Modulos de estudio
		  <span class="caret"></span></button>
		  <ul class="dropdown-menu">
		  <?php $romano = [1 => 'I' , 'II', 'III' , 'IV' , 'V' , 'VI' , 'VII' , 'VIII' , 'IX' , 'X']; ?>
		    <li><a href="#">Modulos de estudio</a></li>  
		    @foreach( $modulos as $modulo_ )
		    <li><a href="{{ route('modulo' , ['id' => $modulo_->id]) }}"><strong> Modulo {{ $romano[$modulo_->id]  }}:</strong> {{ $modulo_->nombre }} </a></li>

		    @endforeach
		  </ul>
		</div> 
	</div>
</div>
	
</div>

<p class="cont"> Contenido </p>

<table class="table table-hover table-contenido">
	<thead>
		<tr>
			<th>#</th>
			<th>Titulo</th>
		</tr>
	</thead>
	<tbody>

		@foreach( $modulo->temas as $tema )
		<tr>
			<td>{{ $loop->index +1 }}</td>
			<td>{{ $tema->nombre }}</td>
		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td>			
			</td>
		</tr>
	</tfoot>		
</table>

<div class="link-recursos">
	<button type="button" class="btn btn-xs btn-default" data-toggle="modal" data-target="#myModal"><span class="fa fa-eye"></span> Lectura </button>	
	@if( $modulo->active_evaluacion() )
	<a class="btn btn-xs btn-success pull-right" href="{{ route('modulo.evaluacion', ['id_modulo' => $modulo->id ]) }}"> <span class="fa fa-spin fa-spinner"></span> Evaluaciòn </a>
	@else
	<a class="btn btn-xs btn-success pull-right disabled" href="#"> <span class="fa fa-spin fa-spinner"></span> Evaluaciòn </a>	
	@endif
</div>

</div>

@include('estudiantes.elementos.modal_modulos')
@endsection

@section('librerias_js')

<script type="text/javascript">
$(document).ready(function(){
	
	$(".pto").on('click' , function(e){
		//linear
		e.preventDefault();
		$(".pto").removeClass('active');
		$(this).addClass('active');		
		var index_item = $(this).attr('data-item');
		$('.seccion-modulo').hide(500);
		$(".seccion-modulo[data-item=" + index_item + "]").show(1000);			
	});
})
</script>


@endsection
