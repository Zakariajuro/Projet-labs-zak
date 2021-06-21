<?php

namespace App\Http\Controllers;

use App\Models\Hometitreequipe;
use Illuminate\Http\Request;

class HometitreequipeController extends Controller
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
     * @param  \App\Models\Hometitreequipe  $hometitreequipe
     * @return \Illuminate\Http\Response
     */
    public function show(Hometitreequipe $hometitreequipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hometitreequipe  $hometitreequipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Hometitreequipe $hometitreequipe)
    {
        return view('admin.home.edittitreequipe', compact('hometitreequipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hometitreequipe  $hometitreequipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hometitreequipe $hometitreequipe)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
        ]);
        $hometitreequipe->titre = $request->titre;
        $hometitreequipe->save();
        return redirect()->route('equipe.index')->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hometitreequipe  $hometitreequipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hometitreequipe $hometitreequipe)
    {
        //
    }
}
