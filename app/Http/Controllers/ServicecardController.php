<?php

namespace App\Http\Controllers;

use App\Models\Servicecard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicecardController extends Controller
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
     * @param  \App\Models\Servicecard  $servicecard
     * @return \Illuminate\Http\Response
     */
    public function show(Servicecard $servicecard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicecard  $servicecard
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicecard $servicecard)
    {
        return view('admin.service.editservicecarte', compact('servicecard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicecard  $servicecard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicecard $servicecard)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
            "description"=> ["required", "min:5"],
        ]);
        if ($request->file('image') != null) {
            Storage::disk('public')->delete('img/' . $servicecard->image);
            $request->file('image')->storePublicly('img/','public');
            $servicecard->image =  $request->file('image')->hashName();
            $servicecard->titre =  $request->titre;
            $servicecard->description =  $request->description;
            $servicecard->save();
        }
        return redirect()->route('servicecard.index')->with('success', "La modification a bien été éxécuté");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Servicecard  $servicecard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicecard $servicecard)
    {
        //
    }
}
