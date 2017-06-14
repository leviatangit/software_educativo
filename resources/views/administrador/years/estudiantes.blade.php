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
        <li><a href="{{ route('estudiantes.index', [$y->id]) }}">{{ $y->f_academico() }}</a></li>          
        @endif
        @endforeach
      </ul>
    </div> 
</div>  


<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title">Listado de estudiante del año {{ $year->f_academico() }} </h3>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>                        
                        <th>Secciòn</th>
                        <th>Evaluaciones</th>                        
                        <th>Promedio</th>                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
               @if( count($year->estudiantes)  > 0 )
               @foreach( $year->estudiantes as $estudiante )
	    			<td> {{ $estudiante->nombre }}	</td>
	    			<td> {{ $estudiante->apellido }}	</td>
	    			<td> {{ $estudiante->seccion->nombre }}	</td>
	    			<td> 4 </td>
	    			<td> {{ $estudiante->promedio }}	</td>
	    			<td> {{ $estudiante->acciones }}	</td>   			
               @endforeach
               @else
                    <tr>
                        <td colspan="5" class="text-center table_sin_registros"> No ay ninguna estudiante registrado en este año academico </td>
                    </tr>               
               @endif
                </tbody>
            </table>
        </div>
        @if( $year->activo )
        <a href="{{ route('users.create', ['estudiante']) }}" class="btn btn-info btn-lg"> <span class="fa fa-user-plus fa-fw"></span> Nuevo Estudiante </a>
        @endif
    </div>
</div>


@endsection

