<?php

namespace App\Http\Controllers;
use App\Services\UserLoginService;
use Illuminate\Http\Request;

class UserAuthController extends Controller
{

    public function showLogin()
    {
        return view('loginPage');
    }

    public function postLogin(UserLoginService $loginService)
{
    request()->validate([
        'email' => 'required',
        'password' => 'required',
    ]);

    $credentials = request()->only('email', 'password');
    
    if ($loginService->attemptLogin($credentials)) {
        return redirect()->route('myprofile');
    } else {
        return back()->with('errorMessage', 'Vartotojo vardas arba slaptažodis yra neteisingi');
    }
    
}

public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
