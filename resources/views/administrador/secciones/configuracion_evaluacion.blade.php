@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li> <a href="{{ route('seccion.show',[$evaluacion->id_seccion])  }}"> {{ $evaluacion->seccion->nombre }} </a> </li>	
	<li class="active"> Evaluaciòn Modulo {{ $evaluacion->modulo->id }} </li>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/crear_evaluacion.js') }}"></script>
@endsection

@section('contenido_pagina')

<form style="display:none" method="post" action="{{ route('evaluacion.enviar',[$evaluacion->id]) }}">
	{{ csrf_field() }}
	{{ method_field('post') }}	
</form>


<div class="white-box w-years">
	<h3 class="titulo_bienvenida" style="float: left;margin-top: 0"> Diseñar evaluaciòn del <strong> <a href="#" class="btn btn-default "> <span class="fa fa-book"></span> Modulo {{ $evaluacion->modulo->id }} </a></strong>, 
	</h3>

	<div class="dropdown otros-modulos pull-right">
	 <a href="#" id="finalizar" class="btn btn-success"> <span class="fa fa-save"></span> Finalizar </a>
	</div> 
</div>		

<div class="row">

<div class="col-sm-6">
<div class="white-box">
   <h3 class="box-title">Items seleccionados Table  <span class="btn btn-default btn-xs cantidad_seleccionados">0</span></h3>
   <p class="text-muted">-</p>
   <div class="table-responsive">
       <table class="table table-agarrados">
           <thead>
               <tr>
                   <th>#</th>
                   <th>First Name</th>
                   <th>Last Name</th>
                   <th>Username</th>
                   <th>Role</th>
               </tr>
           </thead>
           <tbody>          
           </tbody>
       </table>
   </div>
</div>
</div>

<div class="col-sm-6">
<div class="white-box">
   <h3 class="box-title">Items <a  href="#ModalAgregarItem" data-toggle="modal" class="btn btn-success btn-xs"> <span class="fa fa-plus"></span> </a> </h3>
   <p class="text-muted">Listado de items </p>
   <div class="table-responsive">
       <table class="table table-seleccion">
           <thead>
               <tr>
                   <th>#</th>
                   <th>Enunciado</th>
                   <th>Tipo</th>
                   <th>Default</th>
                   <th>Acciones</th>
               </tr>
           </thead>
           <tbody>
          @foreach( $evaluacion->modulo->items as $item )
               <tr>
                   <td> <input type="checkbox" class="items-check" value="{{ $item->id }}"> </td>
                   <td>{{ $item->titulo }}</td>
                   <td>{{ $item->tipo }}</td>
                   <td>{{ $item->default ? 'true' : 'false' }}  </td>
                   <td>
                   		<a href="#ModalVerItem" data-item="{{ $item }}" data-toggle="modal" class="ver_item btn btn-default btn-xs"> <span class="fa fa-eye"></span> </a>
                   		@if( !$item->default )
                   		<a class="btn btn-default btn-xs"> <span class="fa fa-trash"></span> </a>
                   		@endif
                   </td>
               </tr> 
          @endforeach 
           </tbody>
       </table>
   </div>
</div>
</div>

@include('administrador.secciones.recursos.modal_agregar_item')
@include('administrador.secciones.recursos.modal_ver_item')
@include('administrador.secciones.recursos.modal_confirmar_evaluacion')


</div>

@endsection