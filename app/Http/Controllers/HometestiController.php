<?php

namespace App\Http\Controllers;

use App\Models\Hometesti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HometestiController extends Controller
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
        return view('admin.home.createhometesti');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hometesti = new Hometesti();
        $request->file('image')->storePublicly('img/','public');
        $hometesti->image =  $request->file('image')->hashName();
        $hometesti->nom =  $request->nom;
        $hometesti->fonction =  $request->fonction;
        $hometesti->texte =  $request->texte;
        $hometesti->save();
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hometesti  $hometesti
     * @return \Illuminate\Http\Response
     */
    public function show(Hometesti $hometesti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hometesti  $hometesti
     * @return \Illuminate\Http\Response
     */
    public function edit(Hometesti $hometesti)
    {
        return view('admin.home.edittesti', compact('hometesti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hometesti  $hometesti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hometesti $hometesti)
    {
        request()->validate([
            "nom"=> ["required", "min:3"],
            "fonction"=> ["required", "min:3"],
            "texte"=> ["required", "min:5"],
        ]);
        if ($request->file('image') != null) {

            $request->file('image')->storePublicly('img/','public');
            $hometesti->image =  $request->file('image')->hashName();
            $hometesti->nom =  $request->nom;
            $hometesti->fonction =  $request->fonction;
            $hometesti->texte =  $request->texte;
            $hometesti->save();
        }
        return redirect()->route('testimonial.index')->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hometesti  $hometesti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hometesti $hometesti)
    {
        $hometesti->delete();
        return redirect()->back();
    }
}
