<?php

namespace App\Http\Controllers;

use App\Models\Personne;
use Illuminate\Http\Request;

class PersonneController extends Controller
{
    public function index(){

        $personnes = Personne::all();

        return view('personnes', compact("personnes"));
    }

    public function destroy($id){
        $personne = Personne::find($id);
        $personne -> delete();

        return redirect()->back();
    }
}
