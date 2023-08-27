<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegistrationRequest;
use App\Services\UserRegistrationService;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    protected $userRegistrationService;
    
    public function __construct(UserRegistrationService $userRegistrationService)
    {
        $this->userRegistrationService = $userRegistrationService;
    }

    public function showRegister()
     {
      return view('registerpage');
     }


    public function postRegister(UserRegistrationRequest $req, UserRegistrationService $registrationService)
    {
        $data = [
            'name' => request('name'),
            'email' => request('email'),
            'password' => request('password'),
        ];
    
        $user = $registrationService->registerUser($data);
    
        return redirect()->route('login')->with('successMessage', 'Jūsų paskyra sėkmingai sukurta!');
    }
}
