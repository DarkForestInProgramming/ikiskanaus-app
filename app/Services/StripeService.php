<?php

namespace App\Services;

use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeService
{
    public function createCheckoutSession($cart, $userEmail)
    {
        $productItems = [];

        Stripe::setApiKey(config('stripe.sk'));

        foreach ($cart as $id => $details) {
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

        $checkoutSession = Session::create([
            'line_items' => [$productItems],
            'mode' => 'payment',
            'metadata' => [
                'user_id' => "0001"
            ],
            'customer_email' => $userEmail,
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);

        return $checkoutSession->url;
    }

}