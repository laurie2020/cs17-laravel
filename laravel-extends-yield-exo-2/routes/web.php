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

Route::get("/home", function(){
    $page = "Welcome";
    return view("home", compact("page"));
})->name("home");

Route::get("/about", function(){
    $page = "About";
    return view("about", compact("page"));
})->name("about");

Route::get("/service", function(){
    $page = "Service";
    return view("service", compact("page"));
})->name("service");