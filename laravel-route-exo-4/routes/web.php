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
}) -> name("welcome");

Route::get('/date', function(){
    $date = date("d m Y");
    return view("date", compact("date"));
}) -> name("dateDuJour");

Route::get('/fruits', function(){
    $fruits = ["banane", "pomme", "fraise", "poire"];
    return view("fruit", compact("fruits"));
}) -> name("fruits");