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


<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title">Listado de Años academicos</h3>
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
               @if( count($seccion->estudiantes)  > 0 )
               @foreach( $seccion->estudiantes as $estudiante )
    
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


@endsection

