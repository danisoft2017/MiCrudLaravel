<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('modules/logeo/login');
    }

    public function logeo(Request $request)
    {
        $c=$request->only('email','password');
        if(Auth::attempt($c)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->withErrors ([
            'email'=>'Las credenciales no coinciden',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
