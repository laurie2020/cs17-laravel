<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

    $page = "Home";
    return view('welcome', compact('page'));

})->name('welcome');

// Users
// All
Route::get('/users', [UserController::class, 'index'])->name('users');
// Destroy
Route::post('/users/{id}/delete', [UserController::class, 'destroy']);
// Edit
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
// Update
Route::post('/users/{id}/update', [UserController::class, 'update']);
// Create
Route::get('/users/create', [UserController::class, 'create']);
// Store
Route::post('/users/store', [UserController::class, 'store']);
// Download
Route::get('/users/{id}/download', [UserController::class, 'download']);
// Show
Route::get('/users/{id}/show', [UserController::class, 'show']);



// Albums
// All
Route::get('/albums', [AlbumController::class, 'index'])->name('albums');
// Destroy
Route::post('/albums/{id}/delete', [AlbumController::class, 'destroy']);
// Edit
Route::get('/albums/{id}/edit', [AlbumController::class, 'edit']);
// Update
Route::post('/albums/{id}/update', [AlbumController::class, 'update']);
// Create
Route::get('/albums/create', [AlbumController::class, 'create']);
// Store
Route::post('/albums/store', [AlbumController::class, 'store']);
// Show
Route::get('/albums/{id}/show', [AlbumController::class, 'show']);


// Photos
// All
// Route::get('/photos', [PhotoController::class, 'index'])->name('photos');
// // Destroy
// Route::post('/photos/{id}/delete', [PhotoController::class, 'destroy']);
// // Edit
// Route::get('/photos/{id}/edit', [PhotoController::class, 'edit']);
// // Update
// Route::post('/photos/{id}/update', [PhotoController::class, 'update']);
// // Create
// Route::get('/photos/create', [PhotoController::class, 'create']);
// // Store
// Route::post('/photos/store', [PhotoController::class, 'store']);
// Download
// // Show
// Route::get('/photos/{id}/show', [PhotoController::class, 'show']);
Route::resource('/photos', PhotoController::class);
Route::get('/photos/{id}/download', [PhotoController::class, 'download']);

// Personne
Route::resource("/photos", PersonneController::class);

