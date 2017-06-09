@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
    <li> <a href="{{ url('home')  }}"> 2015 </a> </li>    
	<li class="active"> Años </li>
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

<div class="white-box w-years">
    <div class="dropdown otros-modulos pull-right">
      <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">{{ $year->f_academico() }} <span class="caret"></span></button>
      <ul class="dropdown-menu">
      @foreach( $years as $y )
        @if( $y->desde != $year->desde )
        <li><a href="{{ route('seccion.index', [$y->id]) }}">{{ $y->f_academico() }}</a></li>          
        @endif
        @endforeach
      </ul>
    </div> 
</div>  

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title">Listado de secciones del año {{ $year->f_academico() }}</h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Secciòn</th>
                        <th>Profesor</th>                        
                        <th>Estudiantes</th>
                        <th>Promedio</th>                        
                        <th>Modulos</th>                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
               @if( count($secciones)  > 0 )
               @foreach( $secciones as $seccion )
                    <tr class="{{ $seccion->activo ? 'active' : '' }}">
                        <td> <a href="{{ route('seccion.show' , [$seccion->id]) }}"> {{ $seccion->nombre }} </a></td>
                        <td class="td_profesor">
                        @if( $seccion->profesor )
                            <a href="{{ route('users.show', [ $seccion->id_profesor]) }}" class="btn btn-link"> {{ $seccion->profesor->fullName() }} </a>                            
                            @if( $year->activo )
                                <a href="{{ route('seccion.remover_profesor', [ 'id' => $seccion->id ]) }}" class="btn btn-default ra_button btn-sm"> <span class="fa fa-remove"></span></a>
                            @endif
                        @else
                            @if( $year->activo )
                            <button type="button" data-id_seccion="{{ $seccion->id }}" class="btn btn-link btn-xs" data-toggle="modal" data-target="#ModalAsignar"> <span class="fa fa-spin fa-spinner"></span> Asignar </button>
                            @else 
                            <span class="noprof"> - </span>
                            @endif
                        @endif
                        </td>                        
                        <td> <a href="{{ route('estudiantes.seccion.index' , [ $seccion->id ]) }}" class="btn btn-default btn-xs"> {{ count( $seccion->estudiantes ) }} </a>  </td>                        
                        <td>  {{ $seccion->promedio }}  </td>
                        <td> <a href="{{ route('seccion.index', [ $seccion->id] ) }}" class="btn btn-default btn-xs"> 5 </a>  </td>
                        <td> 
                            <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-eye"></span> ver </a>
                            @if( $seccion->activo == false )                            
                            <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-eye"></span> activar </a>
                            @endif
                            <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-eye"></span> </a>
                            <a href="#" class="btn btn-default btn-xs"> <span class="fa fa-eye"></span> </a>        
                        </td>
                    </tr>
               @endforeach
               @else
                    <tr>
                        <td colspan="5" class="text-center table_sin_registros"> No ay ninguna secciòn registrada </td>
                    </tr>               
               @endif
                </tbody>
            </table>
        </div>
        @if( $year->activo )
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#ModalCrear"> <span class="fa fa-calendar fa-fw"></span> Nueva Secciòn</button>
        @endif
    </div>
</div>

@include('administrador.secciones.recursos.modal_asignar_profesor')
@include('administrador.secciones.recursos.modal_crear_seccion')

@endsection

