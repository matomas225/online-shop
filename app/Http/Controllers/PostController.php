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
    function editPage(Post $post)
    {
        return view("post", ["post" => $post, "editPage" => true]);
    }
    function delete(Post $post)
    {
        if (Auth::id() == $post->user_id) {
            $post->delete();
            return Redirect::route('postlist');
        } else {
            return abort(403);
        }
    }
    function edit(Post $post, Request $request)
    {
        $request->validate([
            "productName" => ["max:255"],
            "productDiscription" => ["max:255"],
            'img' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
        ]);
        if (Auth::id() == $post->user_id) {
            if ($request->img) {
                Storage::disk("public")->delete("images", $request->img);

                $img = Storage::disk("public")->put("images", $request->img);
                $post->img = $img;
            }
            if ($request->productName) {
                $post->productName = $request->productName;
            }
            if ($request->productDiscription) {
                $post->productDiscription = $request->productDiscription;
            }
            $post->save();
            return Redirect::route('postlist');
        } else {
            return abort(403);
        }
    }
}
