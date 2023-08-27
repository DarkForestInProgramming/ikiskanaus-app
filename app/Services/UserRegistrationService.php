<?php

namespace App\Services;

use App\Models\User;

class UserRegistrationService
{
    public function registerUser(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}