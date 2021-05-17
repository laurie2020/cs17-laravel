<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\PortofolioController;
use App\Models\Article;
use App\Models\Portofolio;
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
    return view('welcome', compact("page"));
})->name('home');

// Articles
// All
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
// Delete
Route::post('/articles/{id}/delete', [ArticleController::class, 'destroy']);
// Edit
Route::get('/articles/{id}/edit', [ArticleController::class, 'edit']);
// Update
Route::post('/articles/{id}/update', [ArticleController::class, 'update']);
// Create
Route::get('/articles/create', [ArticleController::class, 'create']);
//Store
Route::post('/articles/store', [ArticleController::class, 'store']);

// Portofolios
// All
Route::get('/portofolios', [PortofolioController::class, 'index'])->name('portofolios');
// Delete
Route::post('/portofolios/{id}/delete', [PortofolioController::class, 'destroy']);
// Edit
Route::get('/portofolios/{id}/edit', [PortofolioController::class, 'edit']);
// Update
Route::post('/portofolios/{id}/update', [PortofolioController::class, 'update']);
// Create
Route::get('/portofolios/create', [PortofolioController::class, 'create']);
// Store
Route::post('/portofolios/store', [PortofolioController::class, 'store']);


// Entreprises
// All
Route::get('/entreprises', [EntrepriseController::class, 'index'])->name('entreprises');
// Delete
Route::post('/entreprises/{id}/delete', [EntrepriseController::class, 'destroy']);
// Edit
Route::get('/entreprises/{id}/edit', [EntrepriseController::class, 'edit']);
// Update
Route::post('/entreprises/{id}/update', [EntrepriseController::class, 'update']);
// Create
Route::get('/entreprises/create', [EntrepriseController::class, 'create']);
// Store
Route::post('/entreprises/store', [EntrepriseController::class, 'store']);
