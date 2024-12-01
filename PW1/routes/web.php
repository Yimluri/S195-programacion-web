<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::view('/','inicio');
Route::resource('cliente',ClienteController::class);
