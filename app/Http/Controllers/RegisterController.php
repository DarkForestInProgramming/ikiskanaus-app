<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserRegistrationService;
use App\Http\Requests\UserRegistrationRequest;

class RegisterController extends Controller
{
    protected $userRegistrationService;
    
    public function __construct(UserRegistrationService $userRegistrationService)
    {
        $this->userRegistrationService = $userRegistrationService;
    }

    public function showRegister()
     {
      return view('registerPage');
     }


    public function postRegister(UserRegistrationRequest $req, UserRegistrationService $registrationService)
    {
        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
        ];
    
        $user = $registrationService->registerUser($data);
        Auth::login($user);
        $user->sendEmailVerificationNotification();
        return redirect()->route('verification.notice')->with('successMessage', 'Jūsų paskyra sėkmingai sukurta!');
    }
}

