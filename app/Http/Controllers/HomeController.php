<?php

namespace App\Http\Controllers;

use App\Models\HomeCarte;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $homecarte = HomeCarte::all();
        return view('admin.carrousel', compact('homecarte'));
    }
}
