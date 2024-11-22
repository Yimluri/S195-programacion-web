<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clienteController;


Route::view('/componentes','componentes')->name('rutacomponentes');
//Route::get('/',[controladorVistas::class,'home'])->name('welcome');
//Route::get('/formulario',[clienteController::class,'formulario'])->name('formulario');
//Route::get('/clientes',[controladorVistas::class,'consulta'])->name('clientes');
//Route::post('/enviar',[controladorVistas::class,'procesarCliente'])->name('procesar');

//Rutas de Cliente Controller
Route::get('/',[clienteController::class,'home'])->name('welcome');
Route::get('/cliente/create',[clienteController::class,'create'])->name('formulario');
Route::post('/cliente',[clienteController::class,'store'])->name('procesar');
//vista de las tarjetas
Route::get('/cliente',[clienteController::class,'index'])->name('clientes');
//Rutas usadas para actualizar los registros
Route::get('/cliente/{id}/editar',[clienteController::class,'edit'])->name('editarclientes.edit'); //se utiliza el .edit ya que laravel usa diferentes palabras clave para identificar el uso de una ruta
Route::post('/cliente/actualizar',[clienteController::class,'update'])->name('clientes.update');//se utiliza el .update porque es la ruta donde se procesan los datos
//Ruta para eliminación
Route::delete('/cliente/{id}/delete',[clienteController::class,'destroy'])->name('clientes.destroy');

