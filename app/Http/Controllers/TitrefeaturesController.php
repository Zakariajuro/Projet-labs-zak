<?php

namespace App\Http\Controllers;

use App\Models\Titrefeatures;
use Illuminate\Http\Request;

class TitrefeaturesController extends Controller
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
     * @param  \App\Models\Titrefeatures  $titrefeatures
     * @return \Illuminate\Http\Response
     */
    public function show(Titrefeatures $titrefeatures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Titrefeatures  $titrefeatures
     * @return \Illuminate\Http\Response
     */
    public function edit(Titrefeatures $titrefeatures)
    {
        return view('admin.service.edittitretel', compact('titrefeatures'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Titrefeatures  $titrefeatures
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Titrefeatures $titrefeatures)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
        ]);
        $titrefeatures->titre = $request->titre;
        $titrefeatures->save();
        return redirect()->route('tel.index')->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Titrefeatures  $titrefeatures
     * @return \Illuminate\Http\Response
     */
    public function destroy(Titrefeatures $titrefeatures)
    {
        //
    }
}
