<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => "required|email",
            'password' => "required",
        ]);

        
if (Auth::attempt($credentials)) {
    $request->session()->regenerate();
    return redirect()->intended('/admin/dashboard');
}

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => "required|string|max:255",
            'email' => "required|email|unique:users,email",
            'password' => "required|min:6|confirmed",  // Add password confirmation if you want
            // 'phone' => "required|string|max:15",  // Add if you want phone
        ]);

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please login.');
    }
}
