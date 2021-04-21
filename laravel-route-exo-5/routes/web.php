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
    $objet = new stdClass();
    $objet->nom = "Iula";
    $objet->prenom = "Laurie";
    $objet->age = 20;
    $objet->dateDeNaissance = "13/06/2000";
    return view("welcome", compact("objet"));
});


Route::get("/{route}", function($route){
    
    if (is_numeric($route)) {
        $objet = new stdClass();
        $objet->nom = "Iula";
        $objet->prenom = "Laurie";
        $objet->age = 20;
        $objet->dateDeNaissance = "13/06/2000";
    return view("welcome", compact("objet"));
    } else {
        return view("erreur");
    }
    
    
});

