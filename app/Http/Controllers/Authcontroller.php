<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('companies.login');
    }

    public function loginpost(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/companies/companieslist');
        } 
            // Authentication failed
            return redirect()->route('companies.login')->with('error', 'Invalid credentials');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
