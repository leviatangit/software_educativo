@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li class="active"> Años </li>
@endsection

@section('title_pagina' , 'Años academicos')
@section('titulo_pagina' , 'Años academicos')

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
        <h4 class="box-title">Listado de Años academicos</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Año academico</th>
                        <th>Secciones</th>
                        <th>Estudiantes</th>
                        <th>Status</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
               @if( count($years->all())  > 0 )
               @foreach( $years as $year )
                    <tr class="{{ $year->activo ? 'active' : '' }}">
                        <td> <a href="{{ route('years.show' , [ $year->id ] ) }}" class="btn btn-link">  {{ $year->f_academico() }} </a> </td>
                        <td> <a href="{{ route('seccion.index', [ $year->id ] ) }}" class="btn btn-default btn-xs"> {{ count($year->secciones) }} </a> </td>  
                        <td> <a href="{{ route('estudiantes.index', [ $year->id ] ) }}" class="btn btn-default btn-xs"> {{ count($year->estudiantes) }} </a> </td>
                        <td> {{ $year->activo }}  </td>
                        <td> 
                            <a href="{{ route('years.show' , [ $year->id ] ) }}" class="btn btn-default btn-xs"> <span class="fa fa-eye"></span> ver </a>
                        @if( $year->activo == true )                            
                        @endif                     
                        </td>
                        <td> </td>
                    </tr>
               @endforeach
               @else
                    <tr>
                        <td colspan="5" class="text-center table_sin_registros"> No ay ningun año academico registrado</td>
                    </tr>               
               @endif
                </tbody>
            </table>
        </div>
		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"> <span class="fa fa-calendar fa-fw"></span> Nuevo Año</button>
    </div>
</div>

<script>
    var type = "{{ Session::get('alert-type', 'info') }}";
    toastr.options = {
        closeButton: true,
        progressBar: true,
        showMethod: 'slideDown',
        timeOut: 4000
    };
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
</script>

@include('administrador.years.recursos.modal_crear_year')

@endsection

