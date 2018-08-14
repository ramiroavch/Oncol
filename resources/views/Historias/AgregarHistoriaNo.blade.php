@extends('layouts.app2')

@section('includes')
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
     <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
         <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
@endsection

@section('title')
<h2 class="font-bold">Agregar Nueva Historia</h2>
<div class="row">
    <button class="btn btn-primary pull-right" type="submit">Agregar Historia</button>
</div>
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
				<li>
    				<a href="/AgregarHistoria">Oncológico</a>
    			</li>
    			<li  class="active">
    				<a href="">No Oncológico</a>
    			</li>
			</ul>
    	</li>
	</ul>
</li>
<li>
	<a href="metrics.html"><i class="fa fa-files-o"></i> <span class="nav-label">Controles</span>  </a>
    <ul class="nav nav-second-level">
        <li>
            <a href="/BuscarControl">Buscar Control</a>
        </li>
        <li class="">
            <a>
                <span class="nav-label">Agregar Control
                </span>
                <span class="fa arrow">
                </span>
            </a>
            <ul class="nav nav-third-level">
                <li>
                    <a href="/AgregarControl">Oncológico</a>
                </li>
                <li  class="">
                    <a href="/AgregarControlNo">No Oncológico</a>
                </li>
            </ul>
        </li>
    </ul>
</li>
@endsection
@section('content')
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-4 col-sm-3">
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
                        <input type="text" class="form-control input-sm" name="elf" placeholder="Telefono">
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Fecha Nacimiento:</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="fecha_nac" value="03/04/2014">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Procedencia:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="procedencia">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Referencia:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="referencia">   
                        </textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="lic" placeholder="LIC.">
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Enfermedad actual:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="enf_actual">   
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Diagnóstico:</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Descripción:</label>
                        <textarea class="form-control" style="resize:none;" rows="3" name="diagnosdescrip">   
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Fondo de ojo:</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label class="font-noraml">OD:</label>
                            <label class="btn btn-primary">
                            <input type="file" name="fonojOD" class="hide">
                                        Cargar Imagen
                        </label>
                        </div>
                        <div class="form-group col-sm-6">
                            <label class="font-noraml">OI:</label>
                            <label class="btn btn-primary">
                            <input type="file" name="fonojOI" id="inputImage" class="hide">
                                        Cargar Imagen
                        </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Antecedentes Familiares</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Madre:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antecmadre">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Padre:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antecpadre">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Otros:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antecotros">   
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Otros Antecedentes:</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Personales:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antecpersonal">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Oftalmológicos:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antecoftal">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Quirúrgicos:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antecquirur">   
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Historia Oftalmológica(2):</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Balance Muscular:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="balmus">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Diagnostico:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="diagnoshist">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Plan:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="plan">   
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-3">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Antecedentes Prenatales:</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="nembarazo" placeholder="N° Embarazo">
                        </div>
                    </div>
                        <div class="form-group">
                            <input type="hidden" name="control" value="false">
                            <label> <input type="checkbox" name="control" value="true">controlado</label>
                        </div>
                        <div class="hr-line-dashed"></div>
                    
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="Leucoria" placeholder="Peso al nacer">
                        </div>
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="Leucoria" placeholder="Talla al nacer">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6"">
                            <input type="text" class="form-control" name="Leucoria" placeholder="Semanas">
                        </div>
                    </div>
                        <div class="form-group">
                            <input type="hidden" name="parto" value="false">
                            <label> <input type="checkbox" name="parto" value="true">Parto</label>
                            <input type="hidden" name="cesar" value="false">
                            <label> <input type="checkbox" name="cesar" value="true">Cesárea</label> 
                        </div> 
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="font-noraml">Complicaciones Maternas:</label>
                            <textarea class="form-control" style="resize:none;" rows="2" name="Leucoria">   
                            </textarea>
                        </div>  
                        <div class="form-group">
                            <label class="font-noraml">Complicaciones al Nacer:</label>
                            <textarea class="form-control" style="resize:none;" rows="2" name="Leucoria">   
                            </textarea>
                        </div> 
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Historia Oftalmológica(1):</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">AVSC:</label>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="Leucoria" placeholder="OD">
                        </div>
                        <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="Leucoria" placeholder="OI">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">AVMC:</label>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="Leucoria" placeholder="OD">
                        </div>
                        <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="Leucoria" placeholder="OI">
                        </div>
                    </div>
                    <div class="form-group">
                            <label class="font-noraml">Refracción:</label>
                            <textarea class="form-control" style="resize:none;" rows="2" name="Leucoria">   
                            </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Anexos Oculares:</label>
                    </div>
                     <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="Leucoria" placeholder="OD">
                        </div>
                        <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="Leucoria" placeholder="OI">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Biomicroscopia:</label>
                    </div>
                     <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="Leucoria" placeholder="OD">
                        </div>
                        <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="Leucoria" placeholder="OI">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Presión Intraocular:</label>
                    </div>
                     <div class="row">
                        <div class="form-group col-sm-6">
                            <input type="text" class="form-control" name="Leucoria" placeholder="OD">
                        </div>
                        <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="Leucoria" placeholder="OI">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">Fecha:</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="03/04/2014">
                        </div>
                    </div>
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