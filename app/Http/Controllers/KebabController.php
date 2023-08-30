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

        return view('homePage', compact('kebabs'));
    }

    
    public function meniu()
    {
        $kebabs = Kebab::all();
        $sauces = Sauce::all();

        return view('meniuPage', compact('kebabs', 'sauces'));
    }

    public function cart()
    {
        return view('cartPage');
    }

    public function addToCart($id)
    {
        $kebab = Kebab::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id]))
        {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                'title' => $kebab->title,
                'description' => $kebab->description,
                'price' => $kebab->price,
                'picture' => $kebab->picture,
                'quantity' => 1,
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('successMessage', 'Kebabas sėkmingai pridėtas į prekių krepšelį!');
    }

    public function remove()
    {
        if(request()->id)
        {
            $cart = session()->get('cart');
            if(isset($cart[request()->id]))
            {
                unset($cart[request()->id]);
                session()->put('cart', $cart);
            }
            session()->flash('successMessage', 'Prekė sėkmingai pašalinta!');
        }
    }

    public function update()
    {
        if(request()->id && request()->quantity)
        {
            $cart = session()->get('cart');
            $cart[request()->id]["quantity"] = request()->quantity;
            session()->put('cart', $cart);
            session()->flash('successMessage', 'Prekės kiekis sėkmingai pakeistas!');
        }
    }
}
