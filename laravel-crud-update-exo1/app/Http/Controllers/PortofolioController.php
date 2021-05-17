<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class PortofolioController extends Controller
{
    public function index(){
        $page = "Portofolios";
        $portofolios = Portofolio::all();
        return view("backoffice.portofolio.all", compact('page', 'portofolios'));
    }

    public function destroy($id){
        
        $portofolio = Portofolio::find($id);
        $portofolio->delete();

        return redirect()->back();
    }

    public function edit($id){
        $page = "Edit Portofolio";
        $portofolio = Portofolio::find($id);

        return view('backoffice.portofolio.edit', compact('page', 'portofolio'));
    }

    public function update($id, Request $request){

        $portofolio = Portofolio::find($id);

        $portofolio->nom = $request->nom;
        $portofolio->description = $request->description;
        $portofolio->path = $request->path;
        $portofolio->categorie = $request->categorie;
        $portofolio->updated_at = now();

        $portofolio->save();

        return redirect()->route('portofolios');
    }

    public function create(){

        $page = "Create Portofolio";
        return view('backoffice.portofolio.create', compact('page'));
    }

    public function store(Request $request){

        $portofolio = new Portofolio();

        $portofolio->nom = $request->nom;
        $portofolio->description = $request->description;
        $portofolio->path = $request->path;
        $portofolio->categorie = $request->categorie;
        $portofolio->created_at = now();

        $portofolio->save();

        return redirect()->route('portofolios');
    }
}
