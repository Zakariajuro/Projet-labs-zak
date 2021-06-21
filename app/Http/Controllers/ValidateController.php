<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeSender;
use App\Models\Article;
use App\Models\Commentaire;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ValidateController extends Controller
{
    public function index(){
        $roles = Role::all();
        $commentaires = Commentaire::where('validate', 0)->get();
        $posts = Article::where('validate', 0)->where('trash', 0)->get();
        $users = User::where('validate', 0)->get();
        return view('admin.pages.valide', compact( 'users', 'posts', 'commentaires'));
    }
    public function updateUser(User $id)
    {
        $user = $id;
        $user->validate = 1;
        $user->save();

        Mail::to($user->email)->send(new WelcomeSender($user, $id));

        return redirect()->back()->with('success', 'Membre validé');
    }

    public function deleteUser(User $id)
    {
        $user = $id;
        $user->delete();
        return redirect()->back()->with('success', 'User supprimé');
    }

    public function updateCommentaire(Commentaire  $id)
    {
        $commentaire = $id;
        $commentaire->validate = 1;
        $commentaire->save();
        return redirect()->back()->with('success', 'Commentaire validé');
    }

    public function deleteComment(Commentaire $id)
    {
        $commentaire = $id;
        $commentaire->delete();
        return redirect()->back()->with('success', 'Commentaire supprimé');
    }

    public function updateArticle(Article $id)
    {
        $post = $id;
        $post->validate = 1;
        $post->save();
        return redirect()->back()->with('success', 'Article validé');
    }

    
}
