<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Articletag;
use App\Models\Commentaire;
use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function recupArticle(Article $id) {
        $post = $id;
        $post->trash = 0;
        $post->save();
        return redirect()->back()->with('success', 'Article récupéré');
    }

    public function deleteArticle(Article $id)
    {
        $post = $id;
        $tagposts = Articletag::where('article_id', $post->id)->get();
        foreach ($tagposts as $tagpost) {
            $tagpost->delete();
        }
        $comments = Commentaire::where('article_id', $post->id)->get();
        foreach ($comments as $comment) {
            $comment->delete();
        }
        $post->delete();
        return redirect()->back()->with('success', 'Article supprimé');
    }
    public function trashArticle(Article $id)
    {
        $post = $id;
        $post->trash = 1;
        $post->save();
        return redirect()->back()->with('success', 'Article déplacé dans la corbeille');
    }
}
