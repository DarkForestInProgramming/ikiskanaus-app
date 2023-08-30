<?php

namespace App\Services;

use App\Models\Kebab;
use Illuminate\Support\Facades\Session;

class ShoppingCartService
{
    public function addToCart($id)
    {
        $kebab = Kebab::findOrFail($id);

        $cart = Session::get('cart', []);

        if (isset($cart[$id])) {
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
        Session::put('cart', $cart);
    }

    public function removeFromCart($id)
    {
        $cart = Session::get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            Session::put('cart', $cart);
        }
    }

    public function updateCartQuantity($id, $quantity)
    {
        $cart = Session::get('cart');

        if (isset($cart[$id])) {
            $cart[$id]["quantity"] = $quantity;
            Session::put('cart', $cart);
        }
    }

}