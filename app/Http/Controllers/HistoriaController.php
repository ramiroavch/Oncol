<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\H_Oncol;
use App\Paciente;
use App\Http\Requests\StoreHistoriaRequest;
use resources\views;
use Illuminate\Support\Facades\DB;

class HistoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if(($request->get('num_historia')!="")||($request->get('cedula')!="")||(($request->get('nombre1')!="")&&($request->get('apellido1')!="")))
        {
            $nhistoria=trim($request->get('num_historia'));
            $ci=trim($request->get('cedula'));
            $nombre1=trim($request->get('nombre1'));
            $apellido1=trim($request->get('apellido1'));
            $nombre2=trim($request->get('nombre2'));
            $apellido1=trim($request->get('apellido2'));
            $oncol=trim($request->get('oncologico'));
            $table;
            $fkhist;
            if($oncol=="true"){
                $table="h__oncols";
                $fkhist="historia_id";
            }
            else{
                $table="h__no__oncols";
                $fkhist="historiano_id";
            }

            if($nhistoria!="")
            {            
                $historia=DB::table($table)->where('num_h','=',$nhistoria)->get()->first();
                $paciente=DB::table('pacientes')->where('pacientes.'.$fkhist,'=',$historia->id)->get()->first();
                return view('Historias.MostrarHistoria');
            }
            else if($ci!=""){
                $paciente=DB::table('pacientes')->where('pacientes.ci','=',$ci)->get()->first();
                if($table=="h__oncols")
                {
                $historia=DB::table($table)->where('id','=',$paciente->historia_id)->get()->first();
                }
                else if($table=="h__no__oncols")
                {
                $historia=DB::table($table)->where('id','=',$paciente->historiano_id)->get()->first();   
                }
                return view('Historias.MostrarHistoria');
            }
            else if(($nombre1!="")&&($apellido1!=""))
            {
                if(($nombre2=="")&&($apellido2==""))
                {
                    $paciente=DB::table('pacientes')->where('pacientes.nombre1','=',$nombre1)->where('pacientes.apellido1','=','apellido1');
                }
                else if(($nombre2!="")&&($apellido2!=""))
                {
                    $paciente=DB::table('pacientes')->where('pacientes.nombre1','=',$nombre1)->where('pacientes.apellido1','=','apellido1')->where('pacientes.nombre2','=',$nombre2)->where('pacientes.apellido2','=',$apellido2);
                }
                else if($nombre2!=""){
                    $paciente=DB::table('pacientes')->where('pacientes.nombre1','=',$nombre1)->where('pacientes.apellido1','=','apellido1')->where('pacientes.nombre2','=',$nombre2);
                }
                else if($apellido2!=""){
                    $paciente=DB::table('pacientes')->where('pacientes.nombre1','=',$nombre1)->where('pacientes.apellido1','=','apellido1')->where('pacientes.apellido2','=',$apellido2);
                }
            }
        }
        else
        {
            return redirect()->back()->withErrors(['errorshow' => 'Hay campos vacíos necesarios']);;
        }
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
    public function store(StoreHistoriaRequest $request)
    {

        $historia = new H_Oncol();
        $historia->num_h = $request->input('nhistoria');
        $fecha = $request->input('datehist');
        $newDate = date("Y-m-d", strtotime($fecha));
        $historia->fecha = $newDate;

        $historia->leucoria_edad = $request->input('edadleuco');
        $historia->leu_od = $request->input('LeuOD');
        $historia->leu_oi = $request->input('LeuOI');
        $historia->estrabismo_edad= $request->input('estraedad');
        $historia->estra_od = $request->input('estraOD');
        $historia->estra_oi = $request->input('estraOI');
        $historia->estra_et = $request->input('estraET');
        $historia->estra_xt = $request->input('estraXT');
        $historia->estra_ht = $request->input('estraHT');
        $historia->celulitis_edad = $request->input('celedad');
        $historia->cel_od = $request->input('celOD');
        $historia->cel_oi = $request->input('celOI');
        $historia->otro = $request->input('otro');
        $historia->lugar_sign = $request->input('lugarsignos');
        $historia->desc_sign = $request->input('descripsignos');
        $historia->trat_sign = $request->input('tratsignos');
        $historia->antec_madre = $request->input('antemadre');
        $historia->antec_padre = $request->input('antepadre');
        $historia->antec_hermanos = $request->input('anteherm');
        $historia->N_emb = $request->input(' nembarazo');

        if ($request->input('control')==true)
        {
        $historia->emb_cont = 1;
        }else{
            $historia->emb_cont = 0;
        }

        if ($request->input('parto')==true)
        {
        $historia->emb_parto = 1;
        }else{
            $historia->emb_parto = 0;
        }
        if ($request->input('cesar')==true)
        {
        $historia->emb_cesar = 1;
        }else{
            $historia->emb_cesar = 0;
        }
        $historia->peso_nac = $request->input('pesonac');
        $historia->talla_nac = $request->input('tallanac');
        if ($request->input('complic')==true)
        {
        $historia->nac_comp = 1;
        }else{
            $historia->nac_comp = 0;
        }
        $historia->antec_med = $request->input('antmedicos');
        $historia->antec_quirur = $request->input('antquirur');
        $historia->av_od = $request->input('avod');
        $historia->av_oi = $request->input('avoi');
        $historia->anex_od = $request->input('anexod');
        $historia->anex_oi = $request->input('anexoi');
        $historia->bio_od = $request->input('biood');
        $historia->bio_oi = $request->input('biooi');
        $historia->bal_musc = $request->input('balmus');
        $historia->pio_od = $request->input('piod');
        $historia->pio_oi = $request->input('pioi');


        if($request->hasFile('fonojo')){
            $file=$request->file('fonojo');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }
        else
        {
            $name=null;
        }

        $historia->fondo_ojo = $name;

        $historia->diagnostico = $request->input('diagnos');
        $historia->plan = $request->input('plan');
        $historia->save();


        $paciente = new Paciente();
        $paciente->ci =  $request->input('cedula');
        $paciente->nombre1 = $request->input('nombre1');
        $paciente->nombre2 = $request->input('nombre2');
        $paciente->apellido1 = $request->input('apellido1');
        $paciente->apellido2 = $request->input('apellido2');
        $paciente->tlf = $request->input('telefono');

        $fecha = $request->input('fecha_nac');
        $newDate = date("Y-m-d", strtotime($fecha));
        $paciente->fecha_nac = $newDate;

        $paciente->Procedencia = $request->input('procedencia');
        $paciente->Referencia = $request->input('referencia');
        $paciente->Lic = $request->input('lic');
        $paciente->historia_id=$historia->id;
        $paciente->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view();
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
