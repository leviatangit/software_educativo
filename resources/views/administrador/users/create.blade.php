@extends('layouts.administracion.master')


@section('contenido_pagina')
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
                <input type="text" name="nombre" required="required" value="{{ old('nombre') }}" placeholder="Jose" class="form-control form-control-line">
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
                <input type="text" name="apellido" required="required"  value="{{ old('apellido') }}"  placeholder="Hernandez" class="form-control form-control-line">
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
            <input type="number" name="cedula" required="required"  value="{{ old('cedula') }}"  placeholder="12874596" class="form-control form-control-line"> </div>
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
                <input type="email"  required="required" value="{{ old('email') }}" placeholder="example@gmail.com" class="form-control form-control-line" name="email" id="example-email"> 
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
                   <option {{ $rol == 'profesor' ? "required=required" : '' }} value="profesor">Profesor</option>
                   <option {{ $rol == 'estudiante' ? "required=required" : '' }} value="estudiante">Estudiante</option>
                   
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
                        <option value="{{ $seccion->id }}"> {{ $seccion->nombre }} </option>
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