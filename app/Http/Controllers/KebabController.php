<?php

namespace App\Http\Controllers;
use App\Models\Kebab;
use App\Models\Sauce;

class KebabController extends Controller
{
    //
    public function index()
    {
        $kebabs = Kebab::all();
        return view('homePage', compact('kebabs'));
    }

    
    public function meniu()
    {
        $kebabs = Kebab::all();
        $sauces = Sauce::all();

        return view('meniuPage', compact('kebabs', 'sauces'));
    }
}
