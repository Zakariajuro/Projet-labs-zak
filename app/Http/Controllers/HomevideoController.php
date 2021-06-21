<?php

namespace App\Http\Controllers;

use App\Models\Homevideo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomevideoController extends Controller
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
     * @param  \App\Models\Homevideo  $homevideo
     * @return \Illuminate\Http\Response
     */
    public function show(Homevideo $homevideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homevideo  $homevideo
     * @return \Illuminate\Http\Response
     */
    public function edit(Homevideo $homevideo)
    {
        return view('admin.home.editvideo', compact('homevideo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homevideo  $homevideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homevideo $homevideo)
    {
        if ($request->file('image') != null) {

            $request->file('image')->storePublicly('img/','public');
            $homevideo->image =  $request->file('image')->hashName();
            $homevideo->video =  $request->video;
            $homevideo->save();
        }
        return redirect()->route('video.index')->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homevideo  $homevideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homevideo $homevideo)
    {
        //
    }
}
