<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{
public function adminLoginCredentialsMatch(Request $request)

    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::guard('admin')->attempt($credentials)) { 
            $request->session()->regenerate(); 
            return redirect()->intended('/admin/dashboard')->with('success', 'Admin successfully logged in!');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended('/admin_login_form');
    }
}
