@extends('layouts.app2')

@section('includes')
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
     <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
@endsection

@section('title')
<form class="form-group" method="POST" action="new_control">
    @csrf
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
                <li class="active">
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
        <div class="col-lg-12 col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Evolución Médica oftalmológica</h5>
                </div>
                <div class="ibox-content">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                            <label class="font-noraml">AV:</label>
                            </div>
                            <div class="col-sm-2">
                            <input type="text" class="form-control" name="avod" placeholder="OD">
                            </div>
                            <div class="col-sm-2">
                            <input type="text" class="form-control" name="avid" placeholder="OI">
                            </div>
                            <div class="col-sm-1">
                            <label class="font-noraml">Anexos:</label>
                            </div>
                            <div class="col-sm-2">
                            <input type="text" class="form-control" name="anexod" placeholder="OD">
                            </div>
                            <div class="col-sm-2">
                            <input type="text" class="form-control" name="anexid" placeholder="OI">
                            </div>
                        </div>
                    </div>
                        <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                            <label class="font-noraml">Biomicroscopia:</label>
                            </div>
                            <div class="col-sm-1">
                            <label class="font-noraml">OD:</label>
                            </div>
                            <div class="col-sm-4">
                            <textarea class="form-control" style="resize:none;" rows="2" name="biood">   
                            </textarea>
                            </div>
                            <div class="col-sm-1">
                            <label class="font-noraml">OI:</label>
                            </div>
                            <div class="col-sm-4">
                            <textarea class="form-control" style="resize:none;" rows="2" name="biooi">   
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-2">
                            <label class="font-noraml">Balance Muscular:</label>
                            </div>
                            <div class="col-sm-8">
                            <textarea class="form-control" style="resize:none;" rows="2" name="balmus">   
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                            <label class="font-noraml">Pio:</label>
                            </div>
                            <div class="col-sm-2">
                            <input type="text" class="form-control" name="piood" placeholder="OD">
                            </div>
                            <div class="col-sm-2">
                            <input type="text" class="form-control" name="piooi" placeholder="OI">
                            </div>
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                            <label class="font-noraml">Fondo de ojo:</label>
                            </div>
                            <div class="col-sm-4">
                            <textarea class="form-control" style="resize:none;" rows="2" name="fonojo">   
                            </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                            <label class="font-noraml">Diagnostico:</label>
                            </div>
                            <div class="col-sm-4">
                            <textarea class="form-control" style="resize:none;" rows="2" name="diag">
                            </textarea>
                            </div>
                            <div class="col-sm-1">
                            <label class="font-noraml">Plan:</label>
                            </div>
                            <div class="col-sm-4">
                            <textarea class="form-control" style="resize:none;" rows="2" name="plan">   
                            </textarea>
                            </div>
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