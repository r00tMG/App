<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function getLogin()
    {
     
        return view('/auth/login');
    }
    public function template()
    {
        
        return view('/template');
    }
    public function postLogin(Request $request)
    {
       

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
            'is_admin'=>'1'
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/template');
        }else{
            return back()->with('error','Invalid credentials');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');



        
    }


    public function getLogout(Request $request)
    {
        
        Auth::logout();
        $request->session()->invalidate(); 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }

    
}
