<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyProfileController extends Controller
{
    public function index()
    {
        return view('myProfilePage');
    }
     
    public function verify()
    {
        return view('verifyPage');
    }

    public function resend()
    {
        $user = Auth::user();

        if($user->hasVerifiedEmail())
        {
            return redirect()->route('home.page')->with('successMessage', 'Jūsų el. paštas sėkmingai patvirtintas');
        }

        $user->sendEmailVerificationNotification();
        return back()->with('successMessage', 'Patvirtinimo nuoroda sėkmingai išsiųsta į Jūsų el. paštą');
    }

    public function emailVerificationReq(EmailVerificationRequest $req)
    {
        $req->fulfill();
        Auth::logout();
        return redirect('/login')->with('successMessage', 'Jūsų el. paštas sėkmingai patvirtintas dabar galite prisijungti!');

    }
}
