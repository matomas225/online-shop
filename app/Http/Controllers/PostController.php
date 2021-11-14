<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    function index()
    {
        return view('post');
    }
    function post(Request $request)
    {
        $request->validate([
            "productName" => ["required", "max:255"],
            "productDiscription" => ["required", "max:255"],
            'img' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'

        ]);

        $img = Storage::disk("public")->put("images", $request->img);
        $request->user()->posts()->create([
            'productName' => $request->productName,
            'productDiscription' => $request->productDiscription,
            'img' => $img,
        ]);
        return Redirect::route('home');
    }
}
