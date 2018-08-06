@extends('layouts.app2')

@section('includes')
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
     <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
@endsection

@section('title')
<h2 class="font-bold">Agregar Nueva Historia</h2>
@endsection
@section('Menu')
<li class="active">
	<a href=""><i class="fa fa-edit"></i><span class="nav-label">Historias</span><span class="fa arrow">
	</span></a>
	<ul class="nav nav-second-level">
    	<li>
    		<a href="/home">Buscar Historia</a>
    	</li>
    	<li class="active">
    		<a>
    			<span class="nav-label">Agregar Historia
    			</span>
    			<span class="fa arrow">
				</span>
			</a>
			<ul class="nav nav-third-level">
				<li class="active">
    				<a href="">Oncológico</a>
    			</li>
    			<li>
    				<a href="/AgregarHistoriaNo">No Oncológico</a>
    			</li>
			</ul>
    	</li>
	</ul>
</li>
<li>
	<a href="metrics.html"><i class="fa fa-files-o"></i> <span class="nav-label">Controles</span>  </a>
</li>
@endsection
@section('content')
<div class="wrapper wrapper-content">
	<div class="row">
		<div class="col-lg-5">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Datos Paciente</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="cedula" placeholder="C.I">	
                    </div> 
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="nombre1" placeholder="Primer Nombre">	
                    </div>   
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="nombre2" placeholder="Segundo Nombre">
                    </div> 
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="apellido1" placeholder="Primer Apellido">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="apellido2" placeholder="Segundo Apellido">
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">Fecha Nacimiento</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                        </div>
                    </div>
                    <!--<div class="form-grous">
                        <label> <input type="checkbox" class="i-checks m-t-xs"> Oncológico</label>
                        <button class="btn btn-primary pull-right" type="submit">Agregar</button>
                    </div>   -->
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Signos</h5>
                </div>

                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Donde consulto al tener los signos:</label>
                        <textarea class="form-control" style="resize:none;" rows="3" name="Leucoria">   
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">Que le dijeron:</label>
                        <textarea class="form-control" style="resize:none;" rows="3" name="Leucoria">   
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">Tratamiento que recibió:</label>
                        <textarea class="form-control" style="resize:none;" rows="3" name="Leucoria">   
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Otros Datos</h5>
                </div>
                <div class="ibox-content">
                    <label class="font-noraml">Leucoria:</label>
                    <div class="row">
                        <div class="col-sm-10">
                        <div class="form-group">
                            <div class="col-4 col-sm-4">
                                <input type="text" class="form-control" name="Leucoria" placeholder="Edad">
                            </div>
                            <div class="col-4 col-sm-4">
                                <label> <input type="checkbox" class="i-checks m-t">OD</label>
                            </div>
                            <div class="col-4 col-sm-4">
                                <label> <input type="checkbox" class="i-checks m-t">OI</label> 
                            </div>
                        </div>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group">
                            <label class="font-noraml">Estrabismo:</label>
                            <input type="text" class="form-control input-sm" name="Leucoria" placeholder="Edad"> 
                        </div> 
                        <div class="form-group">
                            <label> <input type="checkbox" class="i-checks m-t-xs form-control">OD</label>
                            <label> <input type="checkbox" class="i-checks m-t-xs form-control">OI</label>
                            <label> <input type="checkbox" class="i-checks m-t-xs form-control">ET</label> 
                            <label> <input type="checkbox" class="i-checks m-t-xs form-control">XT</label>
                            <label> <input type="checkbox" class="i-checks m-t-xs form-control">HT</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label class="font-noraml">Celulitis:</label>
                            <input type="text" class="form-control input-sm" name="Leucoria" placeholder="Edad"> 
                        </div> 
                        <div class="form-group">
                            <label> <input type="checkbox" class="i-checks m-t-xs form-control">OD</label>
                            <label> <input type="checkbox" class="i-checks m-t-xs form-control">OI</label>
                        </div>
                        <div class="form-group">
                            <label class="font-noraml">Otro:</label>
                            <textarea class="form-control" style="resize:none;" rows="3" name="Leucoria">   
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Antecedentes Familiares(Retinoblastoma o Tumores)</h5>
                </div>
                <div class="ibox-content">

                </div>
            </div>
        </div>
	</div>
</div>
@endsection

@section('mainscript')
<script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
@endsection