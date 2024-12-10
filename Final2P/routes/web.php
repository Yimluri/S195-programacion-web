<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/*Route::get('/', function () {
    return view('principal');
});*/

Route::get('/formulario',[ControladorVistas::class,'create'])->name('formulario');
Route::get('/',[ControladorVistas::class,'home'])->name('principal');
Route::get('/ListaContactos',[ControladorVistas::class,'index'])->name('contactos');
Route::post('/enviar',[ControladorVistas::class,'store'])->name('procesar');

