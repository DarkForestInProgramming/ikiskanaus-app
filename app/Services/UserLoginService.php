<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class UserLoginService
{
    public function attemptLogin($credentials)
    {
        if (Auth::attempt($credentials)) {
            return true;
        }
        
        return false;
    }
}
