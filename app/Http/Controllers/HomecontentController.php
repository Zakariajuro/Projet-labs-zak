<?php

namespace App\Http\Controllers;

use App\Models\Homecontent;
use Illuminate\Http\Request;

class HomecontentController extends Controller
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
     * @param  \App\Models\Homecontent  $homecontent
     * @return \Illuminate\Http\Response
     */
    public function show(Homecontent $homecontent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Homecontent  $homecontent
     * @return \Illuminate\Http\Response
     */
    public function edit(Homecontent $homecontent)
    {
        return view('admin.home.editcontent', compact('homecontent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Homecontent  $homecontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homecontent $homecontent)
    {
        request()->validate([
            "texte"=> ["required", "min:5"],
        ]);
        $homecontent->texte = $request->texte;
        $homecontent->save();
        return redirect()->route('content.index', compact('homecontent'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Homecontent  $homecontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homecontent $homecontent)
    {
        //
    }
}
