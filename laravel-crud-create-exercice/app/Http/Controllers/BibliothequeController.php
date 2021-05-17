<?php

namespace App\Http\Controllers;

use App\Models\Bibliotheque;
use Illuminate\Http\Request;

class BibliothequeController extends Controller
{
    
    public function index(){

        $page = "Bibliothèques";
        $bibliotheques = Bibliotheque::all();

        return view('backoffice.bibliotheque.all', compact('page', 'bibliotheques'));
    }

    public function destroy($id){

        $bibliotheque = Bibliotheque::find($id);
        $bibliotheque->delete();

        return redirect()->back();
    }

    public function edit($id){

        $bibliotheque = Bibliotheque::find($id);
        $page = "Edit Bibliotheque";

        return view('backoffice.bibliotheque.edit', compact('bibliotheque', 'page'));
    }

    public function update($id, Request $request){

        $bibliotheque = Bibliotheque::find($id);

        $bibliotheque->nom = $request->nom;
        $bibliotheque->adresse = $request->adresse;
        $bibliotheque->telephone = $request->telephone;
        $bibliotheque->updated_at = now();

        $bibliotheque->save();

        return redirect()->route('bibliotheques');
    }

    public function create(){

        $page = "Create Bibliotheque";

        return view('backoffice.bibliotheque.create', compact('page'));
    }

    public function store(Request $request){

        $bibliotheque = new Bibliotheque();

        $bibliotheque->nom = $request->nom;
        $bibliotheque->adresse = $request->adresse;
        $bibliotheque->telephone = $request->telephone;
        $bibliotheque->created_at = now();

        $bibliotheque->save();

        return redirect()->route('bibliotheques');

    }
}