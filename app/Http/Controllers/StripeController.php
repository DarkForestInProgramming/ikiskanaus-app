<?php

namespace App\Http\Controllers;

class StripeController extends Controller
{
    public function session()
    {
        $user = auth()->user();
        $productItems = [];

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        foreach(session('cart') as $id => $details)
        {
            $title = $details['title'];
            $description = $details['description'];
            $picture = $details['picture'];
            $total = $details['price'];
            $quantity = $details['quantity'];
            $unit_amount = $total * 100;
            
            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $title,
                        'description' => $description,
                        'images' => [$picture],
                    ],
                    'currency' => "eur",
                    'unit_amount' => $unit_amount,
                    
                ],
                'quantity' => $quantity
                
            ];

        }

            $checkoutSession = \Stripe\Checkout\Session::create([
                'line_items' => [$productItems],
                'mode' => 'payment',
                'metadata' => [
                    'user_id' => "0001"
                ],
                'customer_email' => "$user->email",
                'success_url' => route('success'),
                'cancel_url' => route('cancel'),
            ]);

            return redirect()->away($checkoutSession->url);

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
