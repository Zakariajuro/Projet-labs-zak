<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Feature;
use App\Models\Featurebis;
use App\Models\Featureimage;
use App\Models\Footer;
use App\Models\Homeservice;
use App\Models\Hometitreservice;
use App\Models\Newsletter;
use App\Models\Servicecard;
use App\Models\Titrefeatures;
use Illuminate\Http\Request;

class AllController extends Controller
{
    // public function service(){
    //     $services = Homeservice::inRandomOrder()->limit(50)->get();
    //     $titreservice = Hometitreservice::all();
    //     $contacts = Contact::all();
    //     $titrefea = Titrefeatures::all();
    //     $features = Feature::inRandomOrder()->limit(50)->get();
    //     $featuresimage = Featureimage::all();
    //     $featurebis = Featurebis::inRandomOrder()->limit(50)->get();
    //     $servicecard = Servicecard::all();
    //     $newsletter = Newsletter::all();
    //     $footer = Footer::all();
    //     return view('pages.services', compact('services', 'titreservice', 'contacts', 'titrefea', 'features', 'featuresimage', 'featurebis', 'servicecard', 'newsletter', 'footer'));
    // }
}
