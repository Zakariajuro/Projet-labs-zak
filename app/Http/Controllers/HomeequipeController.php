<?php

namespace App\Http\Controllers;

use App\Models\Homeequipe;
use App\Models\Poste;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeequipeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homeequipe  $homeequipe
     * @return \Illuminate\Http\Response
     */
    public function show(Homeequipe $homeequipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homeequipe  $homeequipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeequipe $homeequipe)
    {
        $poste = Poste::all();
        return view('admin.home.editequipe', compact('poste', 'homeequipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homeequipe  $homeequipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeequipe $homeequipe)
    {
        request()->validate([
            "nom"=> ["required", "min:3"],
        ]);
        if ($request->file('image') != null) {
            Storage::disk('public')->delete('img/team/' . $homeequipe->image);
            $request->file('image')->storePublicly('img/team/','public');
            $homeequipe->image =  $request->file('image')->hashName();
            $homeequipe->nom =  $request->nom;
            $homeequipe->poste_id =  $request->poste_id;
            $homeequipe->save();
        }
        return redirect()->route('equipe.index')->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homeequipe  $homeequipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeequipe $homeequipe)
    {
        //
    }
}
