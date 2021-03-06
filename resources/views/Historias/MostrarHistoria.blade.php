@extends('layouts.app2')

@section('includes')
     <link href="{{ asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')}}" rel="stylesheet">
     <link href="{{ asset('css/plugins/iCheck/custom.css')}}" rel="stylesheet">
    <link href="{{ asset('css/plugins/datapicker/datepicker3.css')}}" rel="stylesheet">
@endsection

@section('title')
<div class="row">
<h2 class="font-bold">Agregar Nueva Historia</h2>
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
<div class="row">
    <div class="form-group">
        <div class="col-sm-2 pull-right">
            @if($paciente->historia_id==NULL)
                <a class="btn btn-primary " href="{{ route('AgregarControl.index',['historia'=>'NULL','historiano'=>$historia->num_h]) }}">Agregar Control</a>
            @else
                <a class="btn btn-primary pull-right" href="{{ route('AgregarControl.index',['historia'=>$historia->num_h,'historiano'=>'NULL'])}}">Agregar Control</a>
            @endif
        </div>
        <div class="col-sm-2 pull-right">
            <a class="btn btn-primary pull-right" href="{{ route('ListaControles.index',['historia'=>$historia->num_h,'historiano'=>'NULL'])}}">Ver Controles</a>
        </div>
        @if($paciente->historia_id!=NULL)
            @if($retino==NULL)
                <div class="col-sm-2 pull-right">
                    <a class="btn btn-primary pull-right" href="{{ route('AgregarRetino.index',['historia'=>$historia->num_h])}}">Llenar Retinoblastoma</a>
                </div>
            @else
                <div class="col-sm-2 pull-right">
                    <a class="btn btn-primary pull-right" href="{{ route('AgregarRetino.show',['historia'=>$historia->num_h])}}">Ver Retinoblastoma</a>
                </div>
            @endif
        @endif
        <div class="col-sm-2 pull-right">
        @if($paciente->historia_id==NULL)
            <a class="btn btn-primary" href="{{ route('HistoriaNo.edit',['historiano'=>$historia->num_h]) }}">Modificar Historia</a>
        @else
            <a class="btn btn-primary" href="{{ route('VerHistoria.edit',['historian'=>$historia->num_h]) }}">Modificar Historia</a>
        @endif
        </div>
    </div>
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
                        <label>C.I: {{ $paciente->ci }}</label>
                    </div> 
                    <div class="form-group">
                        <label>Primer Nombre: {{$paciente->nombre1}}</label>
                    </div>   
                    <div class="form-group">
                        <label>Segundo Nombre: {{$paciente->nombre2}} </label>
                    </div> 
                    <div class="form-group">
                        <label>Primer Apellido: {{$paciente->apellido1}}</label>
                    </div>
                    <div class="form-group">
                        <label>Segundo Apellido: {{$paciente->apellido2}}</label>
                    </div>
                    <div class="form-group">
                        <label>Telefono: {{$paciente->tlf}}</label>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group" id="data_1">
                        <label>Fecha Nacimiento: {{$paciente->fecha_nac}}</label>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label>Procedencia: {{$paciente->procedencia}}</label>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label>Referencia: {{$paciente->referencia}}</label>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label>Lic: {{$paciente->Lic}}</label>
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
                        <textarea readonly class="form-control" style="resize:none;" rows="3" name="lugarsignos">{{$historia->lugar_sign}}
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Que le dijeron:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="3" name="descripsignos">{{$historia->desc_sign}}  
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Tratamiento que recibió:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="3" name="tratsignos">{{$historia->trat_sign}}   
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
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Diagnostico:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="diagnos">{{$historia->diagnostico}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">Plan:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="plan">{{$historia->plan}}   
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
                           <label>Edad: {{$historia->leucoria_edad}}</label>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>OD: {{$historia->leu_od}}</label>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>OI: {{$historia->leu_oi}}</label>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="font-noraml">Estrabismo:</label>
                            <label>Edad: {{$historia->estrabismo_edad}}</label>
                        </div> 
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>OD: {{$historia->estra_od}}</label>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>OI: {{$historia->estra_oi}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>ET: {{$historia->estra_et}}</label>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>XT: {{$historia->estra_xt}}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>HT: {{$historia->estra_ht}}</label>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="font-noraml">Celulitis:</label>
                            <label>Edad: {{$historia->celulitis_edad}}</label> 
                        </div> 
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label>OD: {{$historia->cel_od}}</label>
                            </div>
                            <div class="form-group col-sm-6">
                                <label>OI: {{$historia->cel_oi}}</label>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="font-noraml">Otro:</label>
                            <textarea readonly class="form-control" style="resize:none;" rows="3" name="otro">{{$historia->otro}}   
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
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="antemadre">{{$historia->antec_madre}}</textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Padre:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="antepadre">{{$historia->antec_padre}}  
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Hermanos:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="anteherm">{{$historia->antec_hermanos}}   
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
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="balmus">{{$historia->bal_musc}}
                        </textarea>
                    </div>
                     <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="form-group col-sm-2">
                            <label class="font-noraml">PIO:</label>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>OD: {{$historia->pio_od}}</label>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>OI: {{$historia->pio_oi}}</label>
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
                            <label>N° embarazo: {{$historia->N_emb}}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        @if($historia->emb_cont == '1')
                        <label> <input disabled="disabled" type="checkbox" name="control" value="true">controlado</label>
                        @else
                        <label> <input disabled="disabled" checked="checked" type="checkbox" name="control" value="true">controlado</label>
                        @endif
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="form-group col-sm-6">
                            <label>Peso: {{$historia->peso_nac}}</label>
                        </div>
                        <div class="form-group col-sm-6">
                            <label>Talla: {{$historia->talla_nac}}</label>
                        </div>
                    </div>
                    <div class="form-group">
                        @if($historia->emb_cesar =='1')
                            <label> <input disabled="disabled" type="checkbox" name="control" value="true">Cesárea</label>
                        @else
                            <label> <input disabled="disabled" checked="checked" type="checkbox" name="control" value="true">Cesárea</label>
                        @endif

                        @if($historia->nac_comp == '1')
                            <label> <input disabled="disabled" type="checkbox" name="control" value="true">Complicaciones</label>
                        @else
                            <label> <input disabled="disabled" checked="checked" type="checkbox" name="control" value="true">Complicaciones</label>
                        @endif
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
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="antmedicos">{{$historia->antec_med}}
                        </textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Quirúrgicos:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="antquirur">{{$historia->antec_quirur}}  
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
                        <label>N° Historia: {{$historia->num_h}}</label>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label>Fecha: {{$historia->fecha}}</label>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="row">
                        <div class="form-group col-sm-2">
                            <label class="font-noraml">AV:</label>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>OD: {{$historia->av_od}}</label>
                        </div>
                        <div class="form-group col-sm-4">
                            <label>OI: {{$historia->av_oi}}</label>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Anexos:</label>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OD:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="anexod">{{$historia->anex_od}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OI:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="anexoi">{{$historia->anex_oi}}</textarea>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group">
                        <label class="font-noraml">Biomicroscopia:</label>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OD:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="biood">{{$historia->bio_od}}</textarea>
                    </div>
                    <div class="form-group">
                        <label class="font-noraml">OI:</label>
                        <textarea readonly class="form-control" style="resize:none;" rows="2" name="biooi">{{$historia->bio_oi}}</textarea>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
@endsection

@section('mainscript')


    <!-- Custom and plugin javascript -->
    <script type="text/javascript" src="{{ asset('js/inspinia.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/pace/pace.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

    <!-- Chosen -->
    <script type="text/javascript" src="{{ asset('js/plugins/chosen/chosen.jquery.js') }}"></script>

   <!-- JSKnob -->
   <script type="text/javascript" src="{{ asset('js/plugins/jsKnob/jquery.knob.js') }}"></script>

   <!-- Input Mask-->
   <script type="text/javascript" src="{{ asset('js/plugins/jasny/jasny-bootstrap.min.js') }}"></script>

   <!-- Data picker -->
   <script type="text/javascript" src="{{ asset('js/plugins/datapicker/bootstrap-datepicker.js') }}"></script>

    <!-- Image cropper -->
    <script type="text/javascript" src="{{ asset('js/plugins/cropper/cropper.min.js') }}"></script>
@endsection