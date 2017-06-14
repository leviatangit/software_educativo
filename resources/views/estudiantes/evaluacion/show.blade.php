@extends('layouts.estudiantes.master')

@section('contenido')

<div class="container container-modulo">
<div class="row header-modulo">
<div class="modulo">
	<div class="col-md-6">		
		<h3 class="titulo-modulo"> Evaluaciòn Modulo {{ $modulo->id }}  </h3>
		<span class="nombre-modulo"> {{ $modulo->nombre }}</span>
	</div>
</div>
	
</div>

<form action="{{ route('modulo.evaluacion_store', [ $modulo->id ]) }}" method="post">

{{ csrf_field() }};
{{ method_field('POST') }};

@foreach( $modulo->items as $item  )
<div class="form-group evaluacion-div">		
	<label class="control-label label-header"> {{ $item->titulo }}  </label>
	@foreach( $item->opciones as $opcion )	
	<div class="separador-input-radio">

	<input type="radio" {{ $loop->first ? 'checked' : '' }} name="item_{{$item->id}}" value="{{ $opcion->id }}"> <label class="label-text"> {{ $opcion->nombre }} </label>
	</div>
	@endforeach
</div>
@endforeach

<div class="separador">
	<button class="btn btn-success" type="submit"> <span class="fa fa-save"></span> Guardar </button>	
</div>

</form>


</div>

@endsection

@section('librerias_js')

<script type="text/javascript" src="{{ url('jquerysteps/jquery.steps.js') }}"></script>


<script type="text/javascript">
$(document).ready(function(){
	

})
</script>


@endsection
