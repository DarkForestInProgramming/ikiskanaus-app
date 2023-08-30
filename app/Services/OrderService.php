<?php

namespace App\Services;

use App\Models\Order;

class OrderService
{
    public function getUserOrders($userId)
    {
        return Order::where('user_id', $userId)->orderBy('created_at', 'desc')->get();
    }
}