<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::paginate(5);
        return view("backoffice.article.all", compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $commentaires = Commentaire::all();
        return view("backoffice.article.create", compact('commentaires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article();
        $article->titre = $request->titre;
        $article->image = $request->file('image')->hashName();
        $article->categorie = $request->categorie;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->publication = $request->publication;
        $article->created_at = now();

        $article->save();
        $request->file('image')->storePublicly('img', 'public');

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view("backoffice.article.show", compact("article"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view("backoffice.article.edit", compact("article"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        Storage::disk('public')->delete('img/' . $article->image);
        $article->titre = $request->titre;
        $article->image = $request->file('image')->hashName();
        $article->categorie = $request->categorie;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->publication = $request->publication;
        $article->updated_at = now();

        $article->save();
        $request->file('image')->storePublicly('img', 'public');

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::disk('public')->delete('img/' . $article->image);
        $article->delete();

        return redirect()->back();
    }
}
