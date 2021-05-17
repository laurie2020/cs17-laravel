<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function index()
    {
        $page = "Photos";
        $photos = Photo::all();

        return view('backoffice.photo.all', compact('page', 'photos'));
    }

    public function destroy(Photo $photo)        
    {
        Storage::disk('public')->delete('img/' . $photo->path);
        $photo->delete();

        return redirect()->back();
    }

    public function edit(Photo $photo)   
    {
        $page = 'Edit Photo';

        return view('backoffice.photo.edit', compact('photo', 'page'));
    }

    public function update(Photo $photo, Request $request)
    {      
        Storage::disk('public')->delete('img/' . $photo->path);

        $photo->nom = $request->nom;
        $photo->path = $request->file('path')->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;

        $photo->save();
        $request->file('path')->storePublicly('img', 'public');

        return redirect()->route('photos.index');
    }

    public function create()
    {
        $page = 'Create Photo';

        return view('backoffice.photo.create', compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "nom" => "max:30|required",
            "path" => "required",
            "categorie" => "max:50|required",
            "description" => "max:255|required",
            
        ]);
        $photo = new Photo();
        $photo->nom = $request->nom;
        $photo->path = $request->file('path')->hashName();
        $photo->categorie = $request->categorie;
        $photo->description = $request->description;
        $photo->created_at = now();

        $photo->save();
        $request->file('path')->storePublicly('img', "public");

        return redirect()->route('photos.index')->with('message', 'Success creating photo');
    }

    public function download($id)
    {
        $photo = Photo::find($id);
        return Storage::disk('public')->download('img/' . $photo->path);
    }

    public function show($id)
    {
        $photo = Photo::find($id);
        $page = $photo->nom;

        return view('backoffice.photo.show', compact('page', 'photo'));
    }
}
