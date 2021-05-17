<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Cache\RedisTaggedCache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function index(){

        $page = "Images";
        $images = Image::all();
        
        return view('backoffice.image.all', compact('page', 'images'));
    }

    public function destroy($id)
    {
        $image = Image::find($id);
        Storage::disk("public")->delete('img/' . $image->path);
        $image->delete();

        return redirect()->back();
    }

    public function edit($id)
    {
        $page = "Edit Image";
        $image = Image::find($id);

        return view('backoffice.image.edit', compact('page', 'image'));

    }

    public function update($id, Request $request)
    {
        $image = Image::find($id);
        Storage::disk("public")->delete('img/' . $image->path);
        
        $image->nom = $request->nom;
        $image->path = $request->file('path')->hashName();
        
        $image->description = $request->description;
        $image->updated_at = now();

        $image->save();
        $request->file('path')->storePublicly('img', "public");

        return redirect()->route('images');
    }

    public function create()        
    {
        $page = 'Create Image';

        return view('backoffice.image.create', compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "required",
            "path" => "max:255|required",
            "description" => "required"
        ]);
        $image = new Image();
        $image->nom = $request->nom;
        $image->path = $request->file('path')->hashName();
        $image->description = $request->description;
        $image->created_at = now();

        $image->save();
        $request->file('path')->storePublicly('img', "public");

        return redirect()->route('images');
    }
}
