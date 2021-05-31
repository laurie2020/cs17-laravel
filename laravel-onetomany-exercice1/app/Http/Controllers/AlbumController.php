<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = Album::paginate(5);

        return view('backoffice.album.all', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.album.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => "required",
            'lien' => "required",
            'categorie' => "required",
            'description' => "required",
            'album_id' => 'required'
        ]);
        $album = new Album();

        $album->nom = $request->nom;
        $album->description = $request->description;

        $album->save();

        return redirect()->route('albums.index')->with('message', 'Votre nouvel album a été crée avec succès!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function show(Album $album)
    {
        return view('backoffice.album.show', compact('album'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function edit(Album $album)
    {

        return view('backoffice.album.edit', compact('album'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Album $album)
    {
        $request->validate([
            'nom' => "required",
            'lien' => "required",
            'categorie' => "required",
            'description' => "required",
            'album_id' => 'required'
        ]);
        $album->nom = $request->nom;
        $album->description = $request->description;
        $album->updated_at = now();
        $album->save();

        return redirect()->route('albums.index')->with('message', 'Votre album a été modifié avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Album  $album
     * @return \Illuminate\Http\Response
     */
    public function destroy(Album $album)
    {
        $album->delete();

        return redirect()->back();
    }
}
