<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');        
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:dns'],
            'password' => ['required'],
        ]);

        //cek apakah yang diinputkan pada form login sesuai db
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            //jika success

            $role = Auth::user()->role_id; 
            switch ($role) {
                case '1':
                    return redirect()->intended('/admin');
                    break;
                case '2':
                    return redirect()->intended('/kasir');
                    break; 
                case '3':
                    return redirect()->intended('/manajer');
                    break; 
                default:
                return redirect()->intended('/');
                    break;
            }
        }

        return back()->with('loginError', 'Login failed');
    }

    public function logout(Request $request)
    {
        Auth::logout();    
        $request->session()->invalidate();    
        $request->session()->regenerateToken();    
        return redirect('/login');
    }
}
