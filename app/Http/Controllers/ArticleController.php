<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articletag;
use App\Models\Categorie;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $articles = Article::all();
        $tags = Tag::all();
        $categories = Categorie::all();
        return view('admin.article.createarticle', compact('articles', 'categories', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "titre" => ["required"],
            "description" => ["required"],
            "image" => ["required"],
            "categorie_id" => ["required"],
        ]);

        $article = new Article();
        $request->file('image')->storePublicly('img/', 'public');
        $article->image = $request->file('image')->hashName();

        $article->titre = $request->titre;
        $article->description = $request->description;
        $article->user_id = Auth::user()->id;
        $article->categorie_id = $request->categorie_id;

        if (Auth::user()->role_id == 1) {
            $article->validate = 1;
        } else {
            $article->validate = 0;
        }
        $article->trash = 0;
        $article->save();
        foreach ($request->input('taglist') as $value) {
            $tag = new Articletag();
            $tag->article_id = $article->id;
            $tag->tag_id = $value;
            $tag->save();
        }
        if (Auth::user()->role_id == 2) {
            return redirect()->route('article.index')->with('success', 'Votre article a été enregistré');
        } else {
            return redirect()->route('article.index')->with('success', 'Votre article a  été envoyé');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $id)
    {
        $article = $id;
        $categories = Categorie::all(); 
        $tags = Tag::all();
        $articletags = Articletag::all()->where('article_id', $id); 
        return view('admin.article.editarticle', compact('article', 'categories', 'tags', 'articletags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $id)
    {
        $article = $id;
        $request->validate([
            // 'titre'=>"required",
            'description'=>"required|min:20",
            "image" => "required",
            "categorie_id" => "required",
        ]);

        if ( $request->image != null) {
            $request->file('image')->storePublicly('img/', 'public');
            $article->image = $request->file('image')->hashName();
            $article->save();
        }

        $article->categorie_id = $request->categorie_id;
        $article->description = $request->description;
        $article->save();

        $arttag = articleTag::where('article_id', $article->id)->get();
        foreach ($arttag as $item ) {
            $item->delete();
        }
        
            $new = new articleTag();
            $new->tag_id = $request->tag;
            $new->article_id = $article->id;
            $new->save();
        
        return redirect()->route('article.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $id)
    {
        $article = $id;
        // $article->delete();
        $article->trash = 1;
        $article->save();
        // Storage::disk('public')->delete('img/blog/' . $article->image);
        return redirect()->route('article.index')->with('success', "L'article a bien été supprimé");
    }
}
