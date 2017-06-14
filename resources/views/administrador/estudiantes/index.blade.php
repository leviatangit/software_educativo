@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
    <li> <a href="{{ url('years.show', [$year->id])  }}"> {{ $year->academico }} </a> </li>        
	<li class="active"> Estudiantes </li>
@endsection


@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('js/datatables/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('js/datatables/dataTables.bootstrap.css') }}">

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
        <h3 class="box-title">Listado de estudiantes </h3>
        <div class="">
            <table class="table dataTable">
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
                <tr>
                    <td> {{ $estudiante->user->nombre }} </td>
                    <td> {{ $estudiante->user->apellido }} </td>
                    <td> <a class="btn btn-xs btn-default" href="{{ route('seccion.show',[ $estudiante->seccion->id ]) }}">{{ $estudiante->seccion->nombre }}</a>  </td>
                    <td> - </td>
                    <td> - </td>
                    <td> 
                    <a href="{{ route('estudiantes.show', [$estudiante->show]) }}" class="btn btn-default btn-xs"><span class="fa fa-eye"></span> Ver </a>
                    <a href="#" class="btn btn-success btn-xs"><span class="fa fa-edit"></span> Editar </a>
                    <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar </a>          
                    </td>                    
                </tr>
               @endforeach
               @else
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


@section('js')
<script type="text/javascript" src="{{ asset('js/datatables/jquery.dataTables.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/datatables/dataTables.bootstrap.js') }}"></script>

<script type="text/javascript">
    $(function(){
        $('.dataTable').dataTable();
    })
</script>
@endsection
