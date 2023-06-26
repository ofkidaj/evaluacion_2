<?php

use App\Http\Controllers\AsesorController;
use App\Http\Controllers\BonoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovimientosfinancieroController;
use App\Models\Movimientosfinanciero;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('asesor', [AsesorController::class, 'asesor'])->name('asesor');

Route::get('bono', [BonoController::class, 'bono'])->name('bono');

Route::resource('movimientos', MovimientosfinancieroController::class);
