<?php

namespace App\Services;

use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Order;

class StripeService
{
    public function createCheckoutSession($cart, $userEmail)
    {
        $productItems = [];
        $orderItems = [];
    
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
    
    
            $orderItems[] = [
                'kebab_id' => $id,
                'title' => $title,
                'picture' => $picture,
                'quantity' => $quantity,
                'price' => $total,
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
    
    
        foreach ($orderItems as $orderItem) {
            Order::create([
                'user_id' => auth()->id(),
                'kebab_id' => $orderItem['kebab_id'],
                'title' => $orderItem['title'],
                'picture' => $orderItem['picture'],
                'quantity' => $orderItem['quantity'],
                'price' => $orderItem['price'],
            ]);
        }
    
        return $checkoutSession->url;
    }
}