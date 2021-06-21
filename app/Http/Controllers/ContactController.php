<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Footer;
use App\Models\Logo;
use App\Models\Objet;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::all();
        $contacts = Contact::all();
        $footer = Footer::all();
        $objets = Objet::all();
        return view('pages.contact', compact('logos', 'objets', 'contacts', 'footer'));

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
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('admin.contact.editcontact', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        request()->validate([
            "position"=> ["required", "min:3"],
            "titre"=> ["required", "min:3"],
            "description"=> ["required", "min:5"],
            "soustitre"=> ["required", "min:3"],
            "adresse"=> ["required", "min:3"],
            "telephone"=> ["numeric"],
            "email"=> ["required", "min:3"],
        ]);
        $contact->position = $request->position;
        $contact->titre = $request->titre;
        $contact->description = $request->description;
        $contact->soustitre = $request->soustitre;
        $contact->adresse = $request->adresse;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->save();
        return redirect()->route('admincontact.index')->with('success', "La modification a bien été éxécuté");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
