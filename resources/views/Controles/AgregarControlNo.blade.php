@extends('layouts.app2')

@section('includes')
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
     <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
@endsection

@section('title')
<h2 class="font-bold">Agregar Nuevo Control</h2>
<div class="row">
    <button class="btn btn-primary pull-right" type="submit">Agregar Historia</button>
</div>
@endsection
@section('Menu')
<li class="">
	<a href=""><i class="fa fa-edit"></i><span class="nav-label">Historias</span><span class="fa arrow">
	</span></a>
	<ul class="nav nav-second-level">
    	<li>
    		<a href="/home">Buscar Historia</a>
    	</li>
    	<li class="">
    		<a>
    			<span class="nav-label">Agregar Historia
    			</span>
    			<span class="fa arrow">
				</span>
			</a>
			<ul class="nav nav-third-level">
				<li class="">
    				<a href="">Oncológico</a>
    			</li>
    			<li>
    				<a href="/AgregarHistoriaNo">No Oncológico</a>
    			</li>
			</ul>
    	</li>
	</ul>
</li>
<li class="active">
	<a href="metrics.html"><i class="fa fa-files-o"></i> <span class="nav-label">Controles</span>  </a>
    <ul class="nav nav-second-level">
        <li>
            <a href="/BuscarControl">Buscar Control</a>
        </li>
        <li class="active">
            <a>
                <span class="nav-label">Agregar Control
                </span>
                <span class="fa arrow">
                </span>
            </a>
            <ul class="nav nav-third-level">
                <li class="">
                    <a href="/AgregarControl">Oncológico</a>
                </li>
                <li  class="active">
                    <a href="/AgregarControlNo">No Oncológico</a>
                </li>
            </ul>
        </li>
    </ul>
</li>
@endsection