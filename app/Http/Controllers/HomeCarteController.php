<?php

namespace App\Http\Controllers;

use App\Models\HomeCarte;
use App\Models\Icone;
use Illuminate\Http\Request;

class HomeCarteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $homecartes = HomeCarte::all();
        // return view('admin/pages/homecarte', compact('homecartes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icone = Icone::all();
        return view('admin.home.createhomecarte', compact('icone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homeCarte = new HomeCarte();
        $homeCarte->icone_id = $request->icone_id;
        $homeCarte->titre = $request->titre;
        $homeCarte->description = $request->description;
        $homeCarte->save();
        return redirect()->route('home.carte');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCarte $homeCarte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeCarte $homeCarte)
    {
        $icone = Icone::all();   
        return view('admin.home.edithomecarte', compact('homeCarte','icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeCarte $homeCarte)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
            "description"=> ["required", "min:5"],
        ]);
        $homeCarte->icone_id = $request->icone_id;
        $homeCarte->titre = $request->titre;
        $homeCarte->description = $request->description;
        $homeCarte->save();
        return redirect()->route('home.carte', compact('homeCarte'))->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarte  $homeCarte
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeCarte $homeCarte)
    {
        $homeCarte->delete();
        return redirect()->back();
    }
}
