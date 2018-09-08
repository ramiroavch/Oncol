<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\H_No_Oncol;
use App\Paciente;
use App\Http\Requests\StoreHistoriaNoRequest;
use resources\views;
use Illuminate\Support\Facades\DB;

class HistoriaNoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $historia= new H_No_Oncol();

        $fecha = $request->input('fecha'):
        $newDate = date("Y-m-d", strtotime($fecha));

        $historia->fecha=$newDate;
        $historia->enfer_actual= $request->input('enf_actual');
        $historia->diagnos_descrip= $request->input('diagnosdescrip');
        $historia->antec_madre= $request->input('antecmadre');
        $historia->antec_padre= $request->input('antecpadre');
        $historia->antec_otros= $request->input('antecotros');
        $historia->antec_person= $request->input('antecpersonal');
        $historia->antec_oftal= $request->input('antecoftal');
        $historia->antec_quirur= $request->input('antecquirur');
        $historia->bal_musc= $request->input('balmus');
        $historia->diagnostico= $request->input('diagnoshist');
        $historia->plan= $request->input('plan');
        $historia->N_emb= $request->input('nembarazo');
        $historia->emb_cont= $request->input('control');
        $historia->peso_nac= $request->input('peso_nac');
        $historia->talla_nac= $request->input('talla_nac');
        $historia->semanas= $request->input('semanas');
        $historia->emb_cesar= $request->input('cesar');
        $historia->comp_mat= $request->input('comp_mat');
        $historia->comp_nac= $request->input('comp_nac');
        $historia->avsc_od= $request->input('avsc_od');
        $historia->avsc_oi= $request->input('avsc_oi');
        $historia->avmc_od= $request->input('avmc_od');
        $historia->avmc_oi= $request->input('avmc_oi');
        $historia->refracc= $request->input('refraccion');
        $historia->anex_od= $request->input('anex_od');
        $historia->anex_oi= $request->input('anex_oi');
        $historia->bio_od= $request->input('bio_od');
        $historia->bio_oi= $request->input('bio_oi');
        $historia->presion_od= $request->input('pres_od');
        $historia->presion_oi= $request->input('pres_oi');
        $historia->fondo_od= $request->input('fon_od');
        $historia->fondo_oi= $request->input('fon_oi');
        $historia->save();



        $paciente= new Paciente();
        $paciente->ci= $request->input('cedula');
        $paciente->nombre1= $request->input('nombre1');
        $paciente->nombre2= $request->input('nombre2');
        $paciente->apellido1= $request->input('apellido1');
        $paciente->apellido2= $request->input('apellido2');
        $paciente->tlf= $request->input('tlf');
        $paciente->fecha_nac= $request->input('fecha_nac');
        $paciente->procedencia= $request->input('procedencia');
        $paciente->referencia= $request->input('referencia');
        $paciente->lic= $request->input('lic');
        $paciente->historiano_id=$historia->id;
        $paciente->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
