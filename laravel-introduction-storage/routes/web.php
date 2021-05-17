<?php

use App\Http\Controllers\ImageController;
use App\Models\Image;
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
    $page = 'Home';
    return view('welcome', compact('page'));
})->name('welcome');

// Images
// All
Route::get('/images', [ImageController::class, 'index'])->name('images');
// Destroy
Route::post('/images/{id}/delete', [ImageController::class, 'destroy']);
// Edit
Route::get('/images/{id}/edit', [ImageController::class, 'edit']);
// Update
Route::post('/images/{id}/update', [ImageController::class, 'update']);
// Create
Route::get('/images/create', [ImageController::class, 'create']);
// Store
Route::post('/images/store', [ImageController::class, 'store']);
