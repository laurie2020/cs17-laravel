<?php

use App\Http\Controllers\BatimentController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FormationController;
use Illuminate\Support\Facades\Route;

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
})->name('welcome');

Route::get('/batiments', [BatimentController::class, 'index'])->name('batiments');
Route::post('/batiments/{id}/delete', [BatimentController::class, 'destroy']);
Route::get('/batiments/{id}/edit', [BatimentController::class, 'edit']);
Route::post('/batiments/{id}/update', [BatimentController::class, 'update']);

Route::get('/formations', [FormationController::class, 'index'])->name('formations');
Route::post('/formations/{id}/delete', [FormationController::class, 'destroy']);

Route::get('/eleves', [EleveController::class, 'index'])->name('eleves');
Route::post('/eleves/{id}/delete', [EleveController::class, 'destroy']);
