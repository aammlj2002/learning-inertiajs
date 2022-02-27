<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
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
        dd($request);
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
    public function update(Request $request, User $user)
    {
        $validation = $request->validate([
            "name"=>"required",
            "email"=>"required|email"
        ]);
        $user->update($validation);
        return redirect()->to("/users");
    }
    public function edit(User $user)
    {
        return inertia("Users/Edit", [
            "user"=>$user
        ]);
    }
}
