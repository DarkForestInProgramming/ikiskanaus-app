<?php

namespace App\Http\Controllers;

use App\Services\StripeService;
use Illuminate\Support\Facades\Auth;
use App\Models\Order; 

class StripeController extends Controller
{
    protected $stripeService;

    public function __construct(StripeService $stripeService)
    {
        $this->stripeService = $stripeService;
    }

    public function session()
    {
        $user = Auth::user();
        $cart = session('cart', []);

        $checkoutUrl = $this->stripeService->createCheckoutSession($cart, $user->email);

        return redirect()->away($checkoutUrl);
    }

    public function paymentSuccess()
    {
        $user = Auth::user();
        $orders = Order::where('user_id', $user->id)->get();

        session()->forget('cart'); 
        return view('successPage', compact('orders'));
    }

    public function paymentCancel()
    {
        session()->forget('cart'); 
        return view('cancelPage');
    }
}