<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Psy\CodeCleaner\FunctionContextPass;

class ArticleController extends Controller
{
    public function index(){
        $page = "Articles";
        $articles = Article::all();
        return view("backoffice.article.all", compact('page', 'articles'));
    }

    public function destroy($id){
        $article = Article::find($id);
        $article->delete();

        return redirect()->back();
    }

    public function edit($id){
        $page = "Edit Article";
        $article = Article::find($id);

        return view('backoffice.article.edit', compact('article', 'page'));
    }

    public function update($id, Request $request){

        $article = Article::find($id);

        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->poste = $request->poste;
        $article->updated_at = now();

        $article->save();

        return redirect()->route('articles');
    }

    public function create(){
        $page = "Create Article";
        return view("backoffice.article.create", compact('page'));
    }

    public function store(Request $request){

        $article = new Article();

        $article->nom = $request->nom;
        $article->description = $request->description;
        $article->auteur = $request->auteur;
        $article->poste = $request->poste;
        $article->created_at = now();

        $article->save();

        return redirect()->route('articles');
    }
}
