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

Route::get("/", function(){
    return "Bonjour chers utilisateurs";
});

// Route::get("/{route}", function($route){
//     return "Bienvenu sur mon site";
// });

// Route::get("/{nom}", function($nom){
//     return "Hello $nom";
// });

Route::get("/welcome", function(){
    return view("welcome");
})-> name("welcome");

Route::get("/about", function() {
    $prenom = "Laurie";
    $nom = "Iula";
    return view("about", compact("prenom", "nom"));
}) -> name("about");

