<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $user_data = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255',],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        $user = User::create($user_data);
        Auth::login($user);

        return redirect()->intended('/login');

    }

    public function login(Request $request) {
        $user_data = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($user_data, $request->remember)) {
            return redirect()->intended('/');
        }
        else {
            return back()->withErrors(['error' => 'Invalid credentials']);
        }

        return redirect()->route('welcome');
    }
}
