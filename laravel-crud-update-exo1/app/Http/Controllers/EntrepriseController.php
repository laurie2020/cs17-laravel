<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

class EntrepriseController extends Controller
{
    public function index(){
        $page = "Entreprises";
        $entreprises = Entreprise::all();
        return view("backoffice.entreprise.all", compact('page', 'entreprises'));
    }

    public function destroy($id){
        
        $entreprise = Entreprise::find($id);
        $entreprise->delete();

        return redirect()->back();
    }

    public function edit($id){

        $page = "Edit Entrprise";
        $entreprise = Entreprise::find($id);

        return view('backoffice.entreprise.edit', compact('page', 'entreprise'));
    }

    public function update($id, Request $request){

        $entreprise = Entreprise::find($id);
        
        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->telephone = $request->telephone;
        $entreprise->pDeContact = $request->pDeContact;
        $entreprise->image = $request->image;
        $entreprise->updated_at = now();

        $entreprise->save();

        return redirect()->route('entreprises');
    }

    public function create(){

        $page = "Create Entreprise";
        return view('backoffice.entreprise.create', compact('page'));

    }

    public function store(Request $request){

        $entreprise = new Entreprise();

        $entreprise->nom = $request->nom;
        $entreprise->adresse = $request->adresse;
        $entreprise->telephone = $request->telephone;
        $entreprise->pDeContact = $request->pDeContact;
        $entreprise->image = $request->image;
        $entreprise->created_at = now();

        $entreprise->save();

        return redirect()->route('entreprises');
    }
}
