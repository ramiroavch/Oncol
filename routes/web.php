<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/AgregarHistoria', 'RedirectionsController@AgregarHistoria')->name('AgregarHistoria');

Route::get('/AgregarHistoriaNo', 'RedirectionsController@AgregarHistoriaNo')->name('AgregarHistoriaNo');

Route::get('/AgregarControl','RedirectionsController@AgregarControl')->name('AgregarControl');

Route::get('/AgregarControlNo','RedirectionsController@AgregarControlNo')->name('AgregarControlNo');

Route::get('/BuscarControl','RedirectionsController@BuscarControl')->name('BuscarControl');

Route::resource('VerHistoria','HistoriaController');

Route::resource('new_control','ControlController');
 
