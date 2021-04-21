<?php

use Illuminate\Support\Arr;
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
    $date = date("d m Y H:i:s");
    return view("date", compact("date"));
}) -> name("dateDuJour");

Route::get('/fruits', function(){
    $fruits = Arr::shuffle(["banane", "pomme", "fraise", "poire"]);
    // $collection = collect(["banane", "pomme", "fraise", "poire"]);
    // $fruits = $collection->shuffle();
    // $fruits->all();
    return view("fruit", compact("fruits"));
}) -> name("fruits");