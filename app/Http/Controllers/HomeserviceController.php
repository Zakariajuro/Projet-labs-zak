<?php

namespace App\Http\Controllers;

use App\Models\Homeservice;
use App\Models\Icone;
use Illuminate\Http\Request;

class HomeserviceController extends Controller
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
        $icone = Icone::all();
        return view('admin.home.createhomeservice', compact('icone'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $homeservice = new Homeservice();
        $homeservice->icone_id = $request->icone_id;
        $homeservice->titre = $request->titre;
        $homeservice->description = $request->description;
        $homeservice->save();

        return redirect()->route('homeservice.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Homeservice  $homeservice
     * @return \Illuminate\Http\Response
     */
    public function show(Homeservice $homeservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homeservice  $homeservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Homeservice $homeservice)
    {
        $icone = Icone::all();
        return view('admin.home.editservice', compact('icone', 'homeservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homeservice  $homeservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homeservice $homeservice)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
            "description"=> ["required", "min:5"],
        ]);
        $homeservice->icone_id = $request->icone_id;
        $homeservice->titre = $request->titre;
        $homeservice->description = $request->description;
        $homeservice->save();

        return redirect()->route('homeservice.index', compact('homeservice'))->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homeservice  $homeservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homeservice $homeservice)
    {
        $homeservice->delete();
        return redirect()->back();
    }
}
