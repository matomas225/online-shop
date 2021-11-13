<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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


        $productName = $request->productName;
        $productDiscription = $request->productDiscription;
        $imgName = time() . '.' . $request->img->extension();
        $img = "images/" . $imgName;
        $request->img->move(public_path('images'), $imgName);

        $save = new Post;

        $save->productName = $productName;
        $save->productDiscription = $productDiscription;
        $save->imgName = $imgName;
        $save->img = $img;
        $save->save();
        return Redirect::route('home');
    }
}
