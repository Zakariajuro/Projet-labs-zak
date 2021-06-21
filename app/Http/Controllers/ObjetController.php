<?php

namespace App\Http\Controllers;

use App\Mail\ContactSender;
use App\Models\Objet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ObjetController extends Controller
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
        Mail::to('zak@live.be')->send(new ContactSender($request));
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Objet  $objet
     * @return \Illuminate\Http\Response
     */
    public function show(Objet $objet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Objet  $objet
     * @return \Illuminate\Http\Response
     */
    public function edit(Objet $objet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Objet  $objet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Objet $objet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Objet  $objet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Objet $objet)
    {
        //
    }
}
