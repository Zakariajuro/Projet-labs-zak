<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Poste;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    public function edit(User $id){
        $user = $id;
        $genres = Genre::all();
        $postes = Poste::all();
        return view('admin.profil.editprofil', compact('user', 'genres', 'postes'));
    }

    public function update(Request $request, User $id )
    {
        $user = $id;
        $request->validate([
                'nom' => 'required|string|max:255',
                'email' => 'required|email',
                'image' => "required",
                'description' => 'required|string|max:255',
                'genre_id' => 'required|integer',
                'poste_id' => 'required',
                ]);

            if ($request->file('image') != null) {
                Storage::disk('public')->delete('/'. $user->url);
                $request->file('image')->storePublicly('/', 'public');
                $user->image = $request->file('image')->hashName();
                $user->nom = $request->nom;
                $user->email = $request->email;
                $user->description = $request->description;
                $user->genre_id = $request->genre_id;
                $user->poste_id = $request->poste_id;
                $user->save();
                return redirect()->route('profil.index')->with('success', 'votre profil a été modifié');
            }
            return redirect()->back();
            
            // $user->save();


    }
}
