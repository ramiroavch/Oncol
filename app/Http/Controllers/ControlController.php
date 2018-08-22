<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Control;
use App\Http\Requests\StoreControlRequest;
use resources\views;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $historia->avod =$request->input('avod');
        $historia->avid =$request->input('avid');
        $historia->anexod =$request->input('anexod');
        $historia->anexid =$request->input('anexid');
        $historia->biood =$request->input('biood');
        $historia->biooi =$request->input('biooi');
        $historia->balmus =$request->input('balmus');
        $historia->piood =$request->input('piood');
        $historia->piooi =$request->input('piooi');
        $historia->fonojo =$request->input('fonojo');
        $historia->diag =$request->input('diag');
        $historia->plan =$request->input('plan');

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
