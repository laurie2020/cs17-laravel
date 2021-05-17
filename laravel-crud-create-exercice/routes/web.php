<?php

use App\Http\Controllers\BibliothequeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\UserController;
use App\Models\Bibliotheque;
use App\Models\Image;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Psy\Command\EditCommand;

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
})->name('home');

// Users
// All
Route::get('/users', [UserController::class, 'index'])->name('users');
// Delete
Route::post('/users/{id}/delete', [UserController::class, 'destroy']);
// Edit
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
// Update
Route::post('/users/{id}/update', [UserController::class, 'update']);
// Create
Route::get('/users/create', [UserController::class, 'create']);
//Store
Route::post('users/store', [UserController::class, 'store']);

// Bibliotheques
// All
Route::get('/bibliotheques', [BibliothequeController::class, 'index'])->name('bibliotheques');
// Delete
Route::post('/bibliotheques/{id}/delete', [BibliothequeController::class, 'destroy']);
// Edit
Route::get('/bibliotheques/{id}/edit', [BibliothequeController::class, 'edit']);
//Update
Route::post('/bibliotheques/{id}/update', [BibliothequeController::class, 'update']);
// Create
Route::get('/bibliotheques/create', [BibliothequeController::class, 'create']);
// Store
Route::post('/bibliotheques/store', [BibliothequeController::class, 'store']);

// Livres
// All
Route::get('/livres', [LivreController::class, 'index'])->name('livres');
// Delete
Route::post('/livres/{id}/delete', [LivreController::class, 'destroy']);
// Edit
Route::get('/livres/{id}/edit', [LivreController::class, 'edit']);
// Update
Route::post('/livres/{id}/update', [LivreController::class, 'update']);
// Create
Route::get('/livres/create', [LivreController::class, 'create']);
// Store
Route::post('/livres/store', [LivreController::class, 'store']);

// Images
// All
Route::get('/images', [ImageController::class, 'index'])->name('images');
// Delete
Route::post('/images/{id}/delete', [ImageController::class, 'destroy']);
// Edit
Route::get('/images/{id}/edit', [ImageController::class, 'edit']);
// Update
Route::post('/images/{id}/update', [ImageController::class, 'update']);
// Create
Route::get('/images/create', [ImageController::class, 'create']);
// Store
Route::post('/images/store', [ImageController::class, 'store']);

