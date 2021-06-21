<?php

namespace App\Http\Controllers;

use App\Models\Homecontent;
use App\Models\Hometitrecontent;
use Illuminate\Http\Request;

class HometitrecontentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $hometitrecontents = Hometitrecontent::all();
        // $homecontent = Homecontent::all();
        // return view('admin/pages/content', compact('hometitrecontents', 'homecontent'));
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
     * @param  \App\Models\Hometitrecontent  $hometitrecontent
     * @return \Illuminate\Http\Response
     */
    public function show(Hometitrecontent $hometitrecontent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hometitrecontent  $hometitrecontent
     * @return \Illuminate\Http\Response
     */
    public function edit(Hometitrecontent $hometitrecontent)
    {
        return view('admin.home.edittitrecontent', compact('hometitrecontent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hometitrecontent  $hometitrecontent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hometitrecontent $hometitrecontent)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
        ]);
        $hometitrecontent->titre = $request->titre;
        $hometitrecontent->save();

        return redirect()->route('content.index', compact('hometitrecontent'))->with('success', "La modification a bien été éxécuté");
        // return view('home/content', compact('hometitrecontent'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hometitrecontent  $hometitrecontent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hometitrecontent $hometitrecontent)
    {
        //
    }
}
