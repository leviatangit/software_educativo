@extends('layouts.administracion.master')


@section('contenido_pagina')
<!-- .row -->
<div class="row">
<!--  'nombre', 'apellido', 'cedula', 'email', 'password', 'rol', 'status'  -->
<div class="col-md-12 col-xs-12">
    <div class="white-box">
        <form class="form-horizontal form-material" action="#" method="POST">

        	<div class="row">
        	<div class="col-md-6 col-xs-6">
        		<div class="form-group">
                <label class="col-md-12">Nombre</label>
                <div class="col-md-12">
                <input readonly="readonly" value="{{ $user->nombre }}"  class="form-control form-control-line">   
                </div>
            	</div>
        	</div>

        	<div class="col-md-6 col-xs-6">
        		<div class="form-group">
                <label class="col-md-12">Apellido</label>
                <div class="col-md-12">
                <input value="{{ $user->apellido }}" readonly="readonly" class="form-control form-control-line">             
                </div>
            	</div>
        	</div>
        	</div>

        	<div class="row">
        	<div class="col-md-6 col-xs-6">
            <div class="form-group">
            <label class="col-md-12">Cedula</label>
            <div class="col-md-12">
            <input readonly="readonly" value="{{ $user->cedula }}" class="form-control form-control-line"> </div>           
            </div>
        	</div>

        	<div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                <input readonly="readonly"  value="{{ $user->email }}" class="form-control form-control-line"> 
                </div>
            </div>
        	</div>
        	</div>

            <div class="row">
                <div class="col-md-6 col-xs-12">
                    <div class="form-group">
                        <label class="col-md-12">Rol</label>
                    <div class="col-md-12">
                        <input readonly="readonly"  value="{{ $user->rol }}" class="form-control form-control-line"> 
                    </div>
                    </div>
                </div>
            </div>

            <!-- 
          <div class="form-group">
           <div class="col-sm-12">
               <button class="btn btn-success">Registrar</button>
           </div>
          </div>
          -->
        </form>
    </div>
</div>
</div>
<!-- /row -->
@endsection