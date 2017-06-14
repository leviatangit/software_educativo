@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li class="active"> Modulos </li>
@endsection

@section('title_pagina' , 'Modulos')
@section('titulo_pagina' , 'Modulos')

@section('contenido_pagina')

<div class="col-sm-12">
    <div class="white-box">
        <h4 class="box-title">Listado de modulos de estudio</h4>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
               @foreach( $modulos as $modulo )
                    <tr>
                        <td> <img class="img-mini" src="{{ url('img/' . $modulo->imagen->nombre ) }}"> </td>  
                        <td>{{ $modulo->id }}</td>
                        <td>{{ $modulo->nombre }} </td>
                        <td>
                            <a href="#" class="btn btn-xs btn-default"> <span class="fa fa-eye"></span> ver </a>
                            <a href="#" class="btn btn-xs btn-default"> <span class="fa fa-pencil"></span> evaluaciones </a>
                        </td>
                    </tr>
               @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

