<?php

namespace App\Http\Controllers;

use App\Services\StripeService;
use Illuminate\Support\Facades\Auth;

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
        session()->forget('cart'); 
        return view('successPage');
    }

    public function paymentCancel()
    {
        session()->forget('cart'); 
        return view('cancelPage');
    }
}