<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Poste;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    
    public function modifrole(Request $request, User $id)
    {
        $request->validate([
            "role"=>"required",
        ]);

        $user = $id;
        $user->role_id = $request->role;
        $user->save();
        return redirect()->back()->with('success', 'le profil a reçu un rôle');
    }
}
