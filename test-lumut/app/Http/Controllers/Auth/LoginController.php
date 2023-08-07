<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function showLoginForm()
    {
        if (auth()->check()) {
            return redirect('/home');
        }

        return view('welcome');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/home');
        }

        // Authentication failed
        return redirect()->route('login')->withInput()->withErrors([
            'username' => 'Invalid username or password.',
        ]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
