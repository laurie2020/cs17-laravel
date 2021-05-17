<?php

namespace App\Http\Controllers;

use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index(){

        $page = "Livres";
        $livres = Livre::all();

        return view('backoffice.livre.all', compact('page', 'livres'));
    }

    public function destroy($id){

        $livre = Livre::find($id);
        $livre -> delete();

        return redirect()->back();
    }

    public function edit($id){

        $livre = Livre::find($id);
        $page = "Edit Livre";

        return view('backoffice.livre.edit', compact('livre', 'page'));
    }

    public function update($id, Request $request){

        $livre = Livre::find($id);

        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->publication = $request->publication;
        $livre->pages = $request->pages;
        $livre->mobile = $request->mobile;
        $livre->updated_at = now();

        $livre->save();

        return redirect()->route('livres');
    }

    public function create(){
        $page = "Create Livre";
        return view('/backoffice.livre.create', compact('page'));
    }

    public function store(Request $request){

        $livre = new Livre();

        $livre->titre = $request->titre;
        $livre->auteur = $request->auteur;
        $livre->publication = $request->publication;
        $livre->pages = $request->pages;
        $livre->mobile = $request->mobile;
        $livre->created_at = now();

        $livre->save();

        return redirect()->route('livres');

    }
}
