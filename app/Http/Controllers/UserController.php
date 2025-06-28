<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|min:3|max:25',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($data);
        if ($user) {
            return redirect()->route('dashboard');
        }
    }
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($data)) {
            $request->session->regenerate();    // Regenerate session to prevent fixation
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.'
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        } else {
            return view('login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();    // invalidates the session
        $request->session()->regenerateToken(); // regenerates CSRF token
        return redirect()->route('login.form');
    }
}
