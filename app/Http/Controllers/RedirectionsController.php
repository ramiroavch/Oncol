<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use resources\views;

class RedirectionsController extends Controller
{
	public function AgregarHistoria(){
		return view('Historias.AgregarHistoria');
	}
	public function AgregarHistoriaNo(){
		return view('Historias.AgregarHistoriaNo');
	}
}

