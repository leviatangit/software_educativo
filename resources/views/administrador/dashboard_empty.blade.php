@extends('layouts.administracion.master')

@section('breadcrumb')
	<li> <a href="{{ url('home')  }}"> Inicio </a> </li>
	<li> <a href="{{ route('years.index')  }}"> Años </a> </li>
	<li class="active"> - </li>
@endsection

@section('js')

@endsection

@section('contenido_pagina')

<div class="white-box w-years">
	<h3 class="titulo_bienvenida" style="float: left;margin-top: 0"> Bienvenido, {{ Auth::user()->fullName() }}, <span class="instruccion_dashboard"> Para empezar a trabajar por favor registre un año academico <a href="{{ route('years.create') }}" class="btn btn-xs btn-default"> <span class="fa fa-calendar fa-fw"></span> </a> </span> </h3>
</div>		

<div class="row">
	<div class="col-lg-4 col-sm-6 col-xs-12">
	    <div class="white-box analytics-info">
	        <h3 class="box-title">-</h3>
	        <ul class="list-inline two-part">
	            <li>
	                <div id="sparklinedash">
	                <span class="fa fa-graduate-cap"></span>
	                <!-- <canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas> --> </div>
	            </li>
	            <li class="text-right"><i class="ti-arrow-up text-success"></i> <span class="counter text-success">-</span></li>
	        </ul>
	    </div>
	</div>
	<div class="col-lg-4 col-sm-6 col-xs-12">
	    <div class="white-box analytics-info">
	        <h3 class="box-title">-</h3>
	        <ul class="list-inline two-part">
	            <li>
	                <div id="sparklinedash2">
	                <span class="fa fa-graduate-cap"></span>	                
	                <!-- <canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas>
	                -->
	                </div>
	            </li>
	            <li class="text-right"><i class="ti-arrow-up text-purple"></i> <span class="counter text-purple">-</span></li>
	        </ul>
	    </div>
	</div>
	<div class="col-lg-4 col-sm-6 col-xs-12">
	    <div class="white-box analytics-info">
	        <h3 class="box-title">-</h3>
	        <ul class="list-inline two-part">
	            <li>
	                <div id="sparklinedash3">
	                <span class="fa fa-graduate-cap"></span>	                	                
	                <!-- <canvas style="display: inline-block; width: 67px; height: 30px; vertical-align: top;" width="67" height="30"></canvas>         --></div>
	            </li>
	            <li class="text-right"><i class="ti-arrow-up text-info"></i> <span class="counter text-info">-</span></li>
	        </ul>
	    </div>
	</div>
</div>

<div class="row">
	<div class="col-md-6 col-lg-6 col-sm-12">
	    <div class="white-box">
	        <h3 class="box-title">-</h3>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <th>-</th>
	                        <th>-</th>
	                        <th>-</th>
	                        <th>-</th>
	                        <th>-</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>

	<div class="col-md-6 col-lg-6 col-sm-12">
	    <div class="white-box">
	        <h3 class="box-title">-</h3>
	        <div class="table-responsive">
	            <table class="table table-hover">
	                <thead>
	                    <tr>
	                        <th>-</th>
	                        <th>-</th>
	                        <th>-</th>
	                        <th>-</th>
	                        <th>-</th>	                        
	                    </tr>
	                </thead>
	                <tbody>
	
	                </tbody>
	            </table>
	        </div>
	    </div>
	</div>
</div>

@endsection