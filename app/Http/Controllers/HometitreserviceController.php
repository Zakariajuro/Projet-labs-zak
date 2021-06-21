<?php

namespace App\Http\Controllers;

use App\Models\Hometitreservice;
use Illuminate\Http\Request;

class HometitreserviceController extends Controller
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
     * @param  \App\Models\Hometitreservice  $hometitreservice
     * @return \Illuminate\Http\Response
     */
    public function show(Hometitreservice $hometitreservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hometitreservice  $hometitreservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Hometitreservice $hometitreservice)
    {
        return view('admin.home.edittitreservice', compact('hometitreservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hometitreservice  $hometitreservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hometitreservice $hometitreservice)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
        ]);
        $hometitreservice->titre = $request->titre;
        $hometitreservice->save();
        return redirect()->route('homeservice.index')->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hometitreservice  $hometitreservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hometitreservice $hometitreservice)
    {
        //
    }
}
