<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showregistar(){
        return view('auth.register');
    }
    public function showlogin(){
        return view('auth.login');
    }
    public function register(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email'=> 'required|email|unique:users,email',
            'password'=>'required|string|min:8|confirmed'
        ]);
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
    public function login(){

    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();
        return redirect()->route('show.login');
    }
}
