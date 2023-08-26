<?php

namespace App\Http\Controllers;
use App\Models\Kebab;
use App\Models\Sauce;
use Illuminate\Http\Request;

class KebabController extends Controller
{
    //
    public function index()
    {
        $kebabs = Kebab::all();

        return view('homepage', compact('kebabs'));
    }

    
    public function meniu()
    {
        $kebabs = Kebab::all();
        $sauces = Sauce::all();

        return view('meniupage', compact('kebabs', 'sauces'));
    }
}
