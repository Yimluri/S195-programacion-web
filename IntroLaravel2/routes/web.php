<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controladorvistas;


//Route::get('/', function () {
   // return view('welcome');
//});
//Route::get('/formulario', function () {
  //  return view('formulario');
//});
//Route::get('/clientes', function () {
//    return view('clientes');
//});

Route::view('/componentes','componentes')->name('rutacomponentes');
Route::get('/',[controladorVistas::class,'home'])->name('welcome');
Route::get('/formulario',[controladorVistas::class,'formulario'])->name('formulario');
Route::get('/clientes',[controladorVistas::class,'consulta'])->name('clientes');
Route::post('/enviar',[controladorVistas::class,'procesarCliente'])->name('procesar');



