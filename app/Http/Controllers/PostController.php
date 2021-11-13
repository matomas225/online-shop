<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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
            "img" => ["required", "max:255"]
        ]);
        $post = Post::create(["productName" => $request->productName, "productDiscription" => $request->productDiscription, 'img.*' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg']);

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $filename = $file->getClientOriginalName();
            $file->storeAs('public/', $filename);
        }
        return redirect('home');
    }
}
