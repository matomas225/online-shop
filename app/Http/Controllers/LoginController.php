<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login(Request $request)
    {
        $request->validate([
            "email" => ["required", "max:255"],
            "password" => ["required", "max:255"]
        ]);
        if (Auth::attempt($request->only("email", "password"), $request->remember)) {
            return Redirect::route("home");
        } else {
            return Redirect::back()->withErrors(["email" => "Failed to Login"]);
        }
    }
    function logout()
    {
        Auth::logout();
        return Redirect::route("home");
    }
}
