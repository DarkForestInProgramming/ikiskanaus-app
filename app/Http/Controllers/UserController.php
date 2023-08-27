<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showRegister()
    {
        return view('registerpage');
    }

    public function postRegister(UserRegistrationRequest $req)
    {
       User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' => bcrypt(request('password')),
       ]);

       return back();
}

    public function login()
    {
        return view('loginpage');
    }
}
