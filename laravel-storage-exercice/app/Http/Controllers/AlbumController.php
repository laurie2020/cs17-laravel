<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Facade\Ignition\Exceptions\ViewException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class AlbumController extends Controller
{
    public function index()
    {
        $page = 'Albums';
        $albums = Album::all();

        return view('backoffice.album.all', compact('page', 'albums'));
    }

    public function destroy($id)
    {
        $album = Album::find($id);
        $album->delete();

        return redirect()->back();
    }

    public function edit($id)   
    {
        $album = Album::find($id);
        $page = 'Edit Album';

        return view('backoffice.album.edit', compact('album', 'page'));
    }

    public function update($id, Request $request)
    {
        
        $album = Album::find($id);
        

        $album->nom = $request->nom;
        $album->description = $request->description;

        $album->save();

        return redirect()->route('albums');
    }

    public function create()
    {
        $page = 'Create Album';

        return view('backoffice.album.create', compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom'=> "max:30|required",
            'description'=> "max:255|required"
        ]);
        $album = new Album();

        $album->nom = $request->nom;
        $album->description = $request->description;

        $album->save();

        return redirect('albums')->with('message', 'Albums successfully created!');
    }

    public function show($id)
    {
        $album = Album::find($id);
        $page = $album->nom;
        return View('backoffice.album.show', compact('page', 'album'));
    }
}
