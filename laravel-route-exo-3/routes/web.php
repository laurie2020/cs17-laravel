<?php

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
});

Route::get('/about', function(){
    $fruit = "Pomme";
    return view("pages.about", compact("fruit"));
}) -> name("about");

Route::get('/contact', function(){
    $nom = "Iula";
    $prenom = "Laurie";
    $tel = "0123456789";
    return view('pages.contact', compact("nom", "prenom", "tel"));
}) -> name("contact");
