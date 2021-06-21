<?php

namespace App\Http\Controllers;

use App\Models\Hometitretesti;
use Illuminate\Http\Request;

class HometitretestiController extends Controller
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
     * @param  \App\Models\Hometitretesti  $hometitretesti
     * @return \Illuminate\Http\Response
     */
    public function show(Hometitretesti $hometitretesti)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hometitretesti  $hometitretesti
     * @return \Illuminate\Http\Response
     */
    public function edit(Hometitretesti $hometitretesti)
    {
        return view('admin.home.edittitretesti', compact('hometitretesti'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hometitretesti  $hometitretesti
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hometitretesti $hometitretesti)
    {
        request()->validate([
            "titre"=> ["required", "min:3"],
        ]);
        $hometitretesti->titre = $request->titre;
        $hometitretesti->save();
        return redirect()->route('testimonial.index', compact('hometitretesti'))->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hometitretesti  $hometitretesti
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hometitretesti $hometitretesti)
    {
        //
    }
}
