<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Contact;
use App\Models\Feature;
use App\Models\Featurebis;
use App\Models\Featureimage;
use App\Models\Footer;
use App\Models\Homeservice;
use App\Models\Hometitreservice;
use App\Models\Logo;
use App\Models\Newsletter;
use App\Models\Objet;
use App\Models\Service;
use App\Models\Servicecard;
use App\Models\Titrefeatures;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logos = Logo::all();
        $services = Homeservice::paginate(8)->fragment('services');
        $titreservice = Hometitreservice::all();
        $contacts = Contact::all();
        $titrefea = Titrefeatures::all();
        $features = Feature::inRandomOrder()->limit(50)->get();
        $featuresimage = Featureimage::all();
        $featurebis = Featurebis::inRandomOrder()->limit(50)->get();
        $servicecard = Servicecard::all();
        $newsletter = Newsletter::all();
        $footer = Footer::all();
        $objets = Objet::all();
        $articles = Article::all()->reverse();
        return view('pages.services', compact('articles', 'logos', 'objets', 'services', 'titreservice', 'contacts', 'titrefea', 'features', 'featuresimage', 'featurebis', 'servicecard', 'newsletter', 'footer'));
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
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
