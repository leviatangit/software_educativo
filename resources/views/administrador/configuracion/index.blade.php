@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li class="active"> Configuraciòn </li>
@endsection

@section('js')
<script type="text/javascript">
    $(function(){
        $('[data-id_seccion]').on('click',function(){
            var id_seccion = $(this).attr('data-id_seccion');
            $('input[name=id_seccion]').val( id_seccion );
        })

    })
</script>
@endsection


@section('contenido_pagina')

@if( count($errors->all()) > 0 )  
<div class="col-sm-12">
    <div class="white-box">
        @foreach( $errors->all() as $error )
        <li> {{ $error }} </li>
        @endforeach
    </div>
</div>
@endif


<div class="col-sm-12">
    <div class="white-box">
        <form class="form-horizontal" accept="" action="{{ route('config.save') }}" method="post">
            
        {{ csrf_field() }}
        {{ method_field('POST') }}

        <!-- HABILITAR REGISTROS -->

        <?php 

        // Habilitar Registros
        $config_1 = App\Configuracion::find(1);

        ?>

        <div class="form-group separador-config">
        <h5 class="titulo"> Habilitar Registros  </h5>
          <div class="">
            <label>
              <input name="habilitar_registros" id="optionsRadios1" value="true" {{ $config_1->value == 'true' ? "checked='checked'" : '' }} checked="checked" type="radio"> Si </label>
          </div>
          <div class="">
            <label>
              <input name="habilitar_registros" id="optionsRadios2" type="radio" value="false" 
              {{ $config_1->value == 'false' ? "checked='checked'" : '' }}> No </label>
          </div>
        </div>

        <div class="box-footer">
        <button type="submit" class="btn btn-info"> <span class="fa fa-save"></span> Guardar </button>
        <button type="submit" class="btn btn-danger">Cancelar</button>
        </div>
        </form>
    </div>
</div>


@endsection


