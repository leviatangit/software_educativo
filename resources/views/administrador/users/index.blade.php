@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li class="active"> Usuarios </li>
@endsection

@section('title_pagina' , 'Usuarios')
@section('titulo_pagina' , 'Usuarios')

@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('js/datatables/jquery.dataTables.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('js/datatables/dataTables.bootstrap.css') }}">

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

@section('contenido_pagina')

<div class="col-sm-12">
    <div class="white-box">
        <h3 class="box-title">Listado de usuarios </h3>
        <div class="">
            <table class="table dataTable">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>                        
                        <th>Cedula</th>
                        <th>Email</th>                        
                        <th>Rol</th>                        
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
               @if( count($users)  > 0 )
               @foreach( $users as $user )
                <tr>
                    <td> {{ $user->nombre }} </td>
                    <td> {{ $user->apellido }} </td>
                    <td> {{ $user->cedula }} </td>                    
                    <td> {{ $user->email }} </td>                                        
                    <td> {{ $user->rol }} </td>                                                            
                    <td> 
                    <a href="#" class="btn btn-default btn-xs"><span class="fa fa-eye"></span> Ver </a>
                    <a href="#" class="btn btn-success btn-xs"><span class="fa fa-edit"></span> Editar </a>
                    @if( $user->isR('director') == false )
                    <a href="#" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar </a>           
                    @endif
                    </td>                    
                </tr>
               @endforeach
               @else
                    <tr>
                        <td colspan="5" class="text-center table_sin_registros"> No ay ningun usuario registrado en este año </td>
                    </tr>               
               @endif
                </tbody>
            </table>
        </div>
        <a href="{{ route('users.create') }}" class="btn btn-info btn-lg"> <span class="fa fa-user-plus fa-fw"></span> Nuevo Usuario </a>
</div>

@endsection

