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

Route::get("/about/{prenom}", function($prenom){
    return view("pages.about", compact("prenom"));
});

Route::get("/contact/{nom}/{prenom}/{age}", function($nom, $prenom, $age){
    return view("pages.contact", compact("nom", "prenom", "age"));
});