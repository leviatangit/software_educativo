@extends('layouts.administracion.master')

@section('breadcrumb')
    <li> <a href="{{ url('home')  }}"> Inicio </a> </li>
    <li> <a href="{{ route('users.index')  }}"> Usuarios </a> </li>    
    <li class="active"> Crear </li>
@endsection

@section('title_pagina' , 'Crear Usuario')
@section('titulo_pagina' , 'Crear Usuarios')


@section('contenido_pagina')
@if( count($errors) > 0 )
<div class="row">
<div class="col-md-12 col-xs-12">
    <div class="white-box">
    @foreach( $errors->all() as $error )
        {{ $error }}
    @endforeach
    </div>
</div>
</div>
@endif

<!-- .row -->
<div class="row">
<!--  'nombre', 'apellido', 'cedula', 'email', 'password', 'rol', 'status'  -->
<div class="col-md-12 col-xs-12">
    <div class="white-box">
        <form class="form-horizontal form-material" action="{{ route('users.store') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('POST') }}

        	<div class="row">
        	<div class="col-md-6 col-xs-6">
        		<div class="form-group {{ $errors->has('nombre') ? ' has-error' : '' }}">
                <label class="col-md-12">Nombre</label>
                <div class="col-md-12">
                <input type="text" name="nombre" required="required" value="{{ old('nombre') }}" class="form-control form-control-line">
                @if( $errors->has('nombre') )
                    <span class="help-block">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                </div>
            	</div>
        	</div>

        	<div class="col-md-6 col-xs-6">
        		<div class="form-group {{ $errors->has('apellido') ? ' has-error' : '' }}">
                <label class="col-md-12">Apellido</label>
                <div class="col-md-12">
                <input type="text" name="apellido" required="required"  value="{{ old('apellido') }}" class="form-control form-control-line">
                @if( $errors->has('apellido') )
                    <span class="help-block">
                        <strong>{{ $errors->first('apellido') }}</strong>
                    </span>
                @endif                
                </div>
            	</div>
        	</div>
        	</div>

        	<div class="row">
        	<div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('cedula') ? ' has-error' : '' }}">
            <label class="col-md-12">Cedula</label>
            <div class="col-md-12">
            <input type="number" name="cedula" required="required"  value="{{ old('cedula') }}"  class="form-control form-control-line"> </div>
            @if( $errors->has('cedula') )
                <span class="help-block">
                    <strong>{{ $errors->first('cedula') }}</strong>
                </span>
            @endif            
            </div>
        	</div>

        	<div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="example-email" class="col-md-12">Email</label>
                <div class="col-md-12">
                <input type="email"  required="required" value="{{ old('email') }}" class="form-control form-control-line" name="email" id="example-email"> 
                @if( $errors->has('email') )
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                    </div>
            </div>
        	</div>
        	</div>

        	<div class="row">
        	<div class="col-md-6 col-xs-6">
            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                <input name="password" required="required" type="password" value="" class="form-control form-control-line"> 
                @if( $errors->has('password') )
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </div>
            </div>
        	</div>

        	<div class="col-md-6 col-xs-6">
            <div class="form-group">
                <label class="col-md-12">Repetir Password</label>
                <div class="col-md-12">
                <input name="password_confirmation" required="required" type="password" value="" class="form-control form-control-line"> </div>
            </div>
        	</div>
        	</div>

            <div class="row">
            <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label class="col-md-12">Rol</label>
                <div class="col-md-12">
                <select  {{  $rol ? "readonly=readonly" : '' }} name="rol" class="form-control form-control-line">
                   <option {{ $rol == 'profesor' ? "selected=selected" : '' }} value="profesor">Profesor</option>
                   <option {{ $rol == 'estudiante' ? "selected=selected" : '' }} value="estudiante">Estudiante</option>
                   
               </select>
            </div>
            </div>
            </div>

            @if( $years->first() AND $years->first()->seccionesActivas() )
            <div class="col-md-6 col-xs-12">
            <div class="form-group">
                <label class="col-md-12">Asignar a secciòn:</label>
                <div class="col-md-12">
                <select  name="id_seccion" class="form-control form-control-line">
                   <option value=""> No Asignar </option>
                   @foreach( $years->first()->seccionesActivas() as $seccion )
                        <option value="{{ (int) $seccion->id }}"> {{ $seccion->nombre }} </option>
                   @endforeach
               </select>
            </div>
            </div>
            </div>  
            @endif          
            </div>

          <div class="form-group">
           <div class="col-sm-12">
               <button class="btn btn-success">Registrar</button>
           </div>
          </div>
        </form>
    </div>
</div>
</div>
<!-- /row -->
@endsection