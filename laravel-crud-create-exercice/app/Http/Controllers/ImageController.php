<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index(){

        $page = "Images";
        $images = Image::all();

        return view('backoffice.image.all', compact('page', 'images'));
    }

    public function destroy($id){

        $image = Image::find($id);
        $image->delete();

        return redirect()->back();
    }

    public function edit($id){

        $page = "Edit Image";
        $image = Image::find($id);

        return view('backoffice.image.edit', compact('page', 'image'));
    }

    public function update($id, Request $request){

        $image = Image::find($id);

        $image->lien = $request->lien;
        $image->description = $request->description;
        $image->updated_at = now();

        $image->save();

        return redirect()->route('images');

    }

    public function create(){

        $page = 'Create Image';

        return view('backoffice.image.create', compact('page'));
    }

    public function store(Request $request){

        $image = new Image();

        $image->lien = $request->lien;
        $image->description = $request->description;
        $image->created_at = now();

        $image->save();

        return redirect()->route('images');

    }
}
