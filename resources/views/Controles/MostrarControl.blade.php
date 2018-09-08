@extends('layouts.app2')

@section('includes')
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
     <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
@endsection

@section('title')
<div class="row">
<h2 class="font-bold">Ver Control</h2>
</div>
<div class="row">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
@endif
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
    				<a href="/AgregarHistoria">Oncológico</a>
    			</li>
    			<li>
    				<a href="/AgregarHistoriaNo">No Oncológico</a>
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
                            <label class="font-noraml">N°historia:</label>
                            </div>
                            <div class="col-sm-1">
                                    <input type="text" readonly="readonly" checked="checked" class="form-control" name="historia" value="{{$nhistoria}}">
                            </div>
                            <div class="col-sm-6">
                                @if($control->historia_id=='NULL')
                                    <input type="hidden" name="oncologico" value="false">
                                    <label> <input readonly="readonly" type="checkbox" name="oncologico" value="true">Oncológico</label>
                                @else
                                    <input type="hidden" name="oncologico" value="false">
                                    <label> <input readonly="readonly" disabled="disabled" checked="checked" type="checkbox" name="oncologico" value="true">Oncológico</label>
                                @endif
                            </div>
                            <div class="col-sm-3">
                                <div class="form-group" id="data_1">
                                    <label class="font-noraml">Fecha: {{$control->fecha}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-1">
                            <label class="font-noraml">AV:</label>
                            </div>
                            <div class="col-sm-2">
                            <label> OD: {{$control->avod}}</label>
                            </div>
                            <div class="col-sm-2">
                            <label> OI: {{$control->avid}}</label>
                            </div>
                            <div class="col-sm-1">
                            <label class="font-noraml">Anexos:</label>
                            </div>
                            <div class="col-sm-2">
                            <label> OD: {{$control->anexod}}</label>
                            </div>
                            <div class="col-sm-2">
                            <label> ID: {{$control->anexid}}</label>
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
                                <textarea readonly class="form-control" style="resize:none;" rows="2" name="biood">{{$control->biood}}</textarea>
                            </div>
                            <div class="col-sm-1">
                                <label class="font-noraml">OI:</label>
                            </div>
                            <div class="col-sm-4">
                                <textarea readonly class="form-control" style="resize:none;" rows="2" name="biooi">{{$control->biooi}}</textarea>
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
                                <textarea readonly class="form-control" style="resize:none;" rows="2" name="balmus">{{$control->balmus}}</textarea>
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
                                <label>OD: {{$control->piood}}</label>
                            </div>
                            <div class="col-sm-2">
                                <label>OD: {{$control->piooi}}</label>
                            </div>
                            <div class="col-sm-1">
                            </div>
                            <div class="col-sm-2">
                                <label class="font-noraml">Fondo de ojo:</label>
                            </div>
                            <div class="col-sm-4">
                                <textarea readonly="" class="form-control" style="resize:none;" rows="2" name="fonojo">{{$control->fonojo}}</textarea>
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
                            <textarea readonly class="form-control" style="resize:none;" rows="2" name="diag">{{$control->diag}}</textarea>
                            </div>
                            <div class="col-sm-1">
                            <label class="font-noraml">Plan:</label>
                            </div>
                            <div class="col-sm-4">
                            <textarea readonly class="form-control" style="resize:none;" rows="2" name="plan">{{$control->plan}}</textarea>
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

@endsection