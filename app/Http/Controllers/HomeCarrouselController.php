<?php

namespace App\Http\Controllers;

use App\Models\HomeCarrousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeCarrouselController extends Controller
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
        return view('admin.home.createcarrousel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $homeCarrousel = new HomeCarrousel();
        $request->file('image')->storePublicly('img/', "public");
        $homeCarrousel->image = $request->file('image')->hashName();
        $homeCarrousel->phrase = $request->phrase;
        $homeCarrousel->save();
        return redirect()->route('carrousel.index')->with('success', 'une nouvelle image a été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HomeCarrousel  $homeCarrousel
     * @return \Illuminate\Http\Response
     */
    public function show(HomeCarrousel $homeCarrousel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeCarrousel  $homeCarrousel
     * @return \Illuminate\Http\Response
     */
    public function edit(HomeCarrousel $homeCarrousel)
    {
        return view('admin.home.editcarrousel', compact('homeCarrousel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeCarrousel  $homeCarrousel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HomeCarrousel $homeCarrousel)
    {
        if ($request->file('image') != null) {
            $request->file('image')->storePublicly('img/','public');
            $homeCarrousel->image =  $request->file('image')->hashName();
            $homeCarrousel->phrase =  $request->phrase;
            
            $homeCarrousel->save();
        }
        return redirect()->route('carrousel.index')->with('success', "La modification a bien été éxécuté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeCarrousel  $homeCarrousel
     * @return \Illuminate\Http\Response
     */
    public function destroy(HomeCarrousel $homeCarrousel)
    {
        $homeCarrousel->delete();
        return redirect()->back();
    }
}
