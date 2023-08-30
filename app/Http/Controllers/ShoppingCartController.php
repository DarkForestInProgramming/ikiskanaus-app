<?php

namespace App\Http\Controllers;

use App\Models\Kebab;

class ShoppingCartController extends Controller
{
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

    public function removeCart()
    {
        if(request()->id)
        {
            $cart = session()->get('cart');
            if(isset($cart[request()->id]))
            {
                unset($cart[request()->id]);
                session()->put('cart', $cart);
            }
            session()->flash('successMessage', 'Kebabas sėkmingai pašalintas!');
        }
    }

    public function updateCart()
    {
        if(request()->id && request()->quantity)
        {
            $cart = session()->get('cart');
            $cart[request()->id]["quantity"] = request()->quantity;
            session()->put('cart', $cart);
            session()->flash('successMessage', 'Kebabų kiekis sėkmingai pakeistas!');
        }
    }
}
