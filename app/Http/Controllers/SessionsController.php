<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    /**
     * Show the form for logging in.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Sign the user in.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'max:255'],
        ]);

        if (!Auth::attempt($validated)) {
            return back()->withErrors(['password' => 'Unable to authenticate using provided credentials.'])->withInput();
        }

        $request->session()->regenerate();

        return redirect()->intended('/')->with('success', 'Login successful.');
    }

    /**
     * Sign out the user.
     */
    public function destroy()
    {
        Auth::logout();

        return redirect('/login');
    }
}
