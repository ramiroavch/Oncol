@extends('layouts.app2')

@section('includes')
<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
     <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
     <link href="css/plugins/footable/footable.core.css" rel="stylesheet">
     <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
@endsection

@section('title')
<!--<form class="form-group" method="GET" action="VerHistoria" enctype="multipart/form-data">
 @csrf-->
<h2 class="font-bold">Busqueda de Pacientes</h2>
<!--@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
             <li>{{ $error }}</li>
             @endforeach
        </ul>
    </div>
@endif-->
@endsection
@section('Menu')
<li class="">
    <a href=""><i class="fa fa-edit"></i><span class="nav-label">Historias</span><span class="fa arrow">
    </span></a>
    <ul class="nav nav-second-level">
        <li class="">
            <a href="/home">Buscar Historia</a>
        </li>
        <li>
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
                <li>
                    <a href="/AgregarHistoriaNo">No Oncológico</a>
                </li>
            </ul>
        </li>
    </ul>
</li>
@endsection
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Resultados</h5>
                </div>
                <div class="ibox-content">
                    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="8">
                        <thead>
                            <tr>
                                <th data-toggle="true">Primer Nombre</th>
                                <th>Segundo Nombre</th>
                                <th>Primer Apeliido</th>
                                <th>Segundo Apeliido</th>
                                <th data-hide="all">Telefono</th>
                                <th data-hide="all">Fecha Nac</th>
                                <th data-hide="all">Procedencia</th>
                                <th data-hide="all">Referencia</th>
                                <th data-hide="all">Lic</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->nombre1 }}</td>
                                <td>{{ $paciente->nombre2 }}</td>
                                <td>{{ $paciente->apellido1 }}</td>
                                <td>{{ $paciente->apellido2 }}</td>
                                <td><span class="pie">{{ $paciente->tlf }}</span></td>
                                <td>{{ $paciente->fecha_nac }}</td>
                                <td>{{ $paciente->procedencia }}</td>
                                <td>{{ $paciente->referencia }}</td>
                                <td>{{ $paciente->Lic }}</td>
                                <td><a class="btn btn-info" href="{{ route('VerHistoria.show',$paciente->id) }}">Show</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="5">
                                    <ul class="pagination pull-right"></ul>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('mainscript')
<script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FooTable -->
    <script src="js/plugins/footable/footable.all.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();
            $('.footable2').footable();

        });

    </script>
@endsection
<!--</form>-->
