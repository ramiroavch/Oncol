@extends('layouts.app2')

@section('includes')
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
     <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
@endsection

@section('title')
<form class="form-group" method="POST" action="new_oncol" enctype="multipart/form-data">
    @csrf
<h2 class="font-bold">Agregar Nueva Historia</h2>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
@endif
<div class="row">
    <button class="btn btn-primary pull-right" type="submit">Agregar Historia</button>
</div>
@endsection

@section('Menu')
<li class="">
    <a href=""><i class="fa fa-edit"></i><span class="nav-label">Historias</span><span class="fa arrow">
    </span></a>
    <ul class="nav nav-second-level">
        <li class="">
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
                    <a href="/AgregarHistoria">Oncológico</a>
                </li>
                <li>
                    <a href="/AgregarHistoriaNo">No Oncológico</a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li>
    <a href=""><i class="fa fa-files-o"></i> <span class="nav-label">Controles</span><span class="fa arrow">
    </span></a>
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
                        <input type="text" class="form-control input-sm" name="telefono" placeholder="Telefono">
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group" id="data_1">
                                <label class="font-noraml">Fecha Nacimiento</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_nac" class="form-control" value="03/04/2014">
                                </div>
                            </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Procedencia</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="procedencia">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Referencia</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="referencia">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" name="lic" placeholder="LIC">
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Signos</h5>
                </div>

                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Donde consulto al tener los signos:</label>
                        <textarea class="form-control" style="resize:none;" rows="3" name="lugarsignos">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Que le dijeron:</label>
                        <textarea class="form-control" style="resize:none;" rows="3" name="descripsignos">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Tratamiento que recibió:</label>
                        <textarea class="form-control" style="resize:none;" rows="3" name="tratsignos">   
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Historia Oftalmológica(3)</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Fondo de ojo:</label>
                    </div>
                    <div class="form-group">
                        <label class="btn btn-primary">
                            <input type="file" name="fonojo" class="hide">
                                        Cargar Imagen
                        </label>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Diagnostico:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="diagnos">   
                        </textarea>
                    </div>
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
                    <h5>Otros Datos</h5>
                </div>
                <div class="ibox-content">
                        <div class="row">
                            <label class="font-noraml col-sm-12">Leucocoria:</label>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="edadleuco" placeholder="Edad">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="leuOD" placeholder="OD">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="leuOI" placeholder="OI">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="font-noraml">Estrabismo:</label>
                            <input type="text" class="form-control input-sm" name="estraedad" placeholder="Edad"> 
                        </div> 
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="estraOD" placeholder="OD">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="estraOI" placeholder="OI">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="estraET" placeholder="ET">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="estraXT" placeholder="XT">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="estraHT" placeholder="HT">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="font-noraml">Celulitis:</label>
                            <input type="text" class="form-control input-sm" name="celedad" placeholder="Edad"> 
                        </div> 
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="celOD" placeholder="OD">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="celOI" placeholder="OI">
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="font-noraml">Otro:</label>
                            <textarea class="form-control" style="resize:none;" rows="3" name="otro">   
                            </textarea>
                        </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Antecedentes Familiares</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Madre:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antemadre">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Padre:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antepadre">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Hermanos:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="anteherm">   
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Historia Oftalmológica(2)</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Balance Muscular:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="balmus">   
                        </textarea>
                    </div>
                     <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="form-group col-sm-2">
                            <label class="font-noraml">PIO:</label>
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="piod" placeholder="OD">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="pioi" placeholder="OI">
                        </div>
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
                                <input type="text" class="form-control" name="pesonac" placeholder="Peso">
                            </div>
                            <div class="form-group col-sm-6">
                                <input type="text" class="form-control" name="tallanac" placeholder="Talla">
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="parto" value="false">
                            <label> <input type="checkbox" name="parto" value="true">Parto</label>
                            <input type="hidden" name="cesar" value="false">
                            <label> <input type="checkbox" name="cesar" value="true">Cesárea</label>
                            <input type="hidden" name="complic" value="false">
                            <label> <input type="checkbox" name="complic" value="true">Complicación</label> 
                        </div>   
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Otros Antecedentes:</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <label class="font-noraml">Médicos:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antmedicos">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Quirúrgicos:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="antquirur">   
                        </textarea>
                    </div>
                </div>
            </div>
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Historia Oftalmológica(1)</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nhistoria" placeholder="N° Historia">
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Fecha:</label>
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="datehist" class="form-control" value="03/04/2014">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="form-group col-sm-2">
                            <label class="font-noraml">AV:</label>
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="avod" placeholder="OD">
                        </div>
                        <div class="form-group col-sm-4">
                            <input type="text" class="form-control" name="avoi" placeholder="OI">
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Anexos:</label>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OD:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="anexod">   
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OI:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="anexoi">   
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Biomicroscopia:</label>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OD:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="biood">   
                        </textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OI:</label>
                        <textarea class="form-control" style="resize:none;" rows="2" name="biooi">   
                        </textarea>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
</form>
@endsection

@section('mainscript')

<script src="js/plugins/iCheck/icheck.min.js"></script>


   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>


    <script>

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });



    </script>
@endsection
</form>