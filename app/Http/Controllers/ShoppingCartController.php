<?php

namespace App\Http\Controllers;

use App\Services\ShoppingCartService;
use Illuminate\Http\Request;

class ShoppingCartController extends Controller
{
    protected $shoppingCartService;

    public function __construct(ShoppingCartService $shoppingCartService)
    {
        $this->shoppingCartService = $shoppingCartService;
    }

    public function cart()
    {
        return view('cartPage');
    }

    public function addToCart($id)
    {
        $this->shoppingCartService->addToCart($id);
        return redirect()->back()->with('successMessage', 'Kebabas sėkmingai pridėtas į prekių krepšelį!');
    }

    public function removeFromCart(Request $request)
    {
        $this->shoppingCartService->removeFromCart($request->id);
        session()->flash('successMessage', 'Kebabas sėkmingai pašalintas!');
    }

    public function updateCartQuantity(Request $request)
    {
        $this->shoppingCartService->updateCartQuantity($request->id, $request->quantity);
        session()->flash('successMessage', 'Kebabų kiekis sėkmingai pakeistas!');
    }
}
