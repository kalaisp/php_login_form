<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class usercontroller extends Controller
{
    //
    public function showRegistrationForm()
    {
        return view('welcome');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect ()->route('staff.index')->with('success', 'login successfully.');
//return view('/dashboard');
    }

    return redirect('/login')->with('error', 'Invalid Username and password. Please try again.');
}
}
