<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    function index()
    {
        return view('register');
    }
    function store(Request $request)
    {
        $request->validate([
            "username" => ["required", "max:255"],
            "email" => ["required", "max:255", "unique:users"],
            "password" => ["required", "max:255", "confirmed"]
        ]);
        $user = User::create(["role" => "customer", "name" => $request->username, "email" => $request->email, "password" => Hash::make($request->password)]);
        Auth::login($user);
        return Redirect::route("home");
    }
}
