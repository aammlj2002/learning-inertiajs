<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create()
    {
        return inertia("Auth/Login");
    }
    public function store(Request $request)
    {
        $validation = $request->validate([
            "email"=>"required|email",
            "password"=>"required"
        ]);
        if (Auth::attempt($validation)) {
            $request->session()->regenerate();
            return redirect()->intended();
        }
        return back()->withErrors([
            "email"=>"the provided credentials do not match our records"
        ]);
    }
    public function destroy()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
