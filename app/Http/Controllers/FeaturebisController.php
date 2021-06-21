<?php

namespace App\Http\Controllers;

use App\Models\Featurebis;
use App\Models\Icone;
use Illuminate\Http\Request;

class FeaturebisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
     * @param  \App\Models\Featurebis  $featurebis
     * @return \Illuminate\Http\Response
     */
    public function show(Featurebis $featurebis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Featurebis  $featurebis
     * @return \Illuminate\Http\Response
     */
    public function edit(Featurebis $featurebis)
    {
        $icone = Icone::all();
        return view('admin.service.edittelbis', compact('featurebis', 'icone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Featurebis  $featurebis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Featurebis $featurebis)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
            "description"=> ["required", "min:5"],
        ]);
        $featurebis->icone_id = $request->icone_id;
        $featurebis->titre = $request->titre;
        $featurebis->description = $request->description;
        $featurebis->save();
        return redirect()->route('tel.index', compact('featurebis'))->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Featurebis  $featurebis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Featurebis $featurebis)
    {
        //
    }
}
